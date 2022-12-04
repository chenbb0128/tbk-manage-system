<?php

namespace App\Managers;

use App\Models\Image;
use App\Models\Material;
use App\Models\ReplyActionMap;
use App\Models\ReplyKeyword;
use App\Utils\StrUtil;

class RobotReplyManager
{
    /**
     * 京东商品搜索
     * @param $keyword
     * @return array|string
     */
    public static function jdGoodsSearch($keyword)
    {
        // 替换换行标签，移除html标签，使能正确匹配url
        $keyword = strip_tags(str_replace('<br/>', ' ', $keyword));
        $message = '';
        $matchUrls = StrUtil::matchUrl($keyword);
        if (!empty($matchUrls)) {
            // 批量转链
            if (count($matchUrls) > 1) {
                $content = DataokeManager::getInstance()->jdBatchPromotionUnionConvert($keyword);
                $message = str_replace(' ', "\n", $content);
                return $message ?: '该商品未查询到佣金～';
            }
            $matchUrl = $matchUrls[0];
            $parseInfo = self::parseJdInfo($matchUrl);
            if (empty($parseInfo)) {
                \Log::error('京东商品解析失败:'.$keyword);
                return '该商品未查询到佣金～';
            }
            $params = ['skuIds' => $parseInfo['skuId']];
            // 根据skuId查询商品详情
            $goodsList = DataokeManager::getInstance()->jdGoodsSearch($params);
            if (!empty($goodsList)) {
                $goods = $goodsList[0];
                $couponList = $goods['couponList'];
                $coupon = static::getBestCoupon($couponList);

                $goodsUrl = self::getJdGoodsUrl($goods, $coupon);
                $couponPrice = $coupon['discount'] ?? 0;
                $zkPrice = $goods['lowestPrice'] - $couponPrice;
                $commissionRate = round($goods['commissionShare'] / 100, 3);
                $commissionPrice = round(($zkPrice * $commissionRate), 2);
                $message = "{$goods['skuName']}\n\n原价：{$goods['lowestPrice']}元\n优惠价：{$zkPrice}元\n佣金比率：". $commissionRate * 100 .
                    "%\n预估佣金：{$commissionPrice} 元\n购买链接：{$goodsUrl}";
            }
        }
        return $message ?: '该商品未查询到佣金～';
    }

    /**
     * 解析京东链接
     * @param $url
     * @return array|mixed|void
     */
    private static function parseJdInfo($url) {
        // 使用大淘客解析
        $parseInfo = DataokeManager::getInstance()->jdParseUrl($url);
        return $parseInfo;
    }

    /**
     * 获取商品最好的优惠券
     * @param $couponList
     * @return array
     */
    private static function getBestCoupon($couponList)
    {
        $bastCoupon = [];
        foreach ($couponList ?: [] as $coupon) {
            if ($coupon['isBest']) {
                $bastCoupon = $coupon;
                break;
            }
        }
        return $bastCoupon;
    }

    /**
     * 获取京东商品链接
     * 优先从京东联盟获取，不存在则从大淘客获取链接
     * @param $goods
     * @param $coupon
     * @return mixed|string
     */
    private static function getJdGoodsUrl($goods, $coupon)
    {
        // 转链生成文案
        $data = [
            'siteId' => config('jd.site_id'),
            'materialId' => $goods['materialUrl'],
        ];
        if (!empty($coupon)) {
            $data['couponUrl'] = $coupon['link'];
        }
        // 先通过京东联盟获得聚合链接,将聚合链接转链
        $mixUrl = JdManager::getInstance()->promotionCommonGet($data);
        $goodsUrl = DataokeManager::getInstance()->jdPromotionUnionConvert($mixUrl);

        // 转链失败，直接通过大淘客获取
        if (empty($goodsUrl)) {
            $goodsUrl = DataokeManager::getInstance()->jdPromotionUnionConvert($goods['materialUrl']);
        }
        return $goodsUrl;
    }

    /**
     * 淘宝商品搜索
     * @param $keyword
     * @param $user
     * @return string
     */
    public static function tbGoodsSearch($keyword)
    {
        $message = '';
        $goodsInfo = DataokeManager::getInstance()->tbParseContent($keyword);
        $pid = config('alimama.pid');
        if (!empty($goodsInfo)) {
            $linkParams = [
                'goodsId' => $goodsInfo['goods_id'],
                'pid' => $pid,
            ];
            $goods = DataokeManager::getInstance()->tbGetPrivilegeLink($linkParams);
            if (!empty($goods)) {
                $goods['image'] = $goodsInfo['goods_image'] ?: '';
                $goods['title'] = $goodsInfo['title'] ?: '这应该是你要的商品';
            }
        }
        if (!empty($goods)) {
            $tpwd = static::createTbTpwd($goods);
            $commissionRate = round($goods['commission_rate'] / 100, 3);
            $commissionPrice = round(($goods['actual_price'] * $commissionRate), 2);
            $message = "{$tpwd}\n\n====================\n原价：{$goods['original_price']} 元\n优惠价：{$goods['actual_price']} 元\n".
                "佣金比率：". $commissionRate * 100 ."%\n预估佣金：{$commissionPrice} 元\n复制本条信息购买";
        }
        return $message ?: '该商品未查询到佣金～';
    }

    private static function createTbTpwd($goods)
    {
        $tpwdParams = [
            'url' => $goods['short_url'],
            'text' => $goods['title'],
            'logo' => $goods['image'],
        ];
        $tpwd = AlimamaManager::getInstance()->tbkTpwdCreate($tpwdParams);
        return $tpwd;
    }

    /**
     * 解析其他不能识别的内容
     * @param $content
     * @return array|string
     * @todo 模糊匹配待做，这边逻辑后续再补充
     */
    public static function parseOtherContent($content)
    {
        $msgType = Material::TEXT;

        // 暂时只支持精确匹配，模糊匹配无效,暂时不使用replies表,只回复一条
        $material = ReplyKeyword::leftJoin('reply_action_maps', 'reply_action_maps.reply_id', '=', 'reply_keywords.reply_id')
            ->leftJoin('materials', 'materials.id', '=', 'reply_action_maps.model_id')
            ->where('reply_keywords.keyword', '=', $content)
            ->where('model_type', ReplyActionMap::MATERIAL_TYPE)
            ->select(['materials.type', 'materials.value'])
            ->first();

        if ($material->type === Material::IMAGE) {
            $image = Image::where('id', $material->value)->first();
            $message = $image->url;
            $msgType = Material::IMAGE;
        } else {
            $message = $material->value;
        }

        return [
            'message' => $message,
            'msg_type' => $msgType
        ];
    }
}
