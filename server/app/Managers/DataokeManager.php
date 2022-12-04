<?php


namespace App\Managers;


class DataokeManager
{
    private static $instance;
    private $client;

    private function __construct()
    {
        $client = new \CheckSign();
        $client->appKey = config('dataoke.app_key');
        $client->appSecret = config('dataoke.secret_key');
        $this->client = $client;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 淘宝内容万能解析
     * http://www.dataoke.com/kfpt/api-d.html?id=33
     * @param $content
     * @return array
     */
    public function tbParseContent($content)
    {
        $client = $this->client;
        $client->version = 'v1.0.0';
        $client->host = 'https://openapi.dataoke.com/api/tb-service/parse-content';
        $params = [
            'content' => strip_tags($content)
        ];
        $goodsInfo = [];
        try {
            $response = $client->request($params);
            $result = json_decode($response, true);
            if ($result['code'] == 0 && !empty($result['data']['goodsId'])) {
                $data = $result['data'];
                $goodsInfo = [
                    'title' => $data['originInfo']['title'],
                    'goods_id' => $data['goodsId'],
                    'goods_image' => $data['originInfo']['image']
                ];
            }
        } catch (\Exception $e) {
            \Log::error('大淘客解析错误');
        }
        return $goodsInfo;
    }

    public function tbGetPrivilegeLink($params)
    {
        $client = $this->client;
        $client->version = 'v1.3.1';
        $client->host = 'https://openapi.dataoke.com/api/tb-service/get-privilege-link';
        $goods = [];
        try {
            $response = $client->request($params);
            $result = json_decode($response, true);
            if ($result['code'] == 0 && !empty($result['data']['itemId'])) {
                $data = $result['data'];
                $goods = [
                    'goods_id' => $data['itemId'],
                    'short_url' => $data['shortUrl'],
                    'tpwd' => $data['tpwd'],
                    'long_tpwd' => $data['longTpwd'],
                    'original_price' => $data['originalPrice'],
                    'actual_price' => $data['actualPrice'],
                    'commission_rate' => $data['maxCommissionRate']
                ];
            }
        } catch (\Exception $e) {
            \Log::error('大淘客高效转链接口错误');
        }
        return $goods;
    }

    /**
     * 京东url解析
     * http://www.dataoke.com/pmc/api-d.html?id=75
     * @param $url
     * @return array|mixed
     */
    public function jdParseUrl($url)
    {
        $client = $this->client;
        $client->version = 'v1.0.0';
        $client->host = 'https://openapi.dataoke.com/api/dels/jd/kit/parseUrl';
        $params = [
            'url' => $url
        ];
        $response = $client->request($params);

        $result = json_decode($response, true);
        $parseInfo = [];
        if ($result['code'] == 0) {
            $parseInfo = $result['data'];
        }
        return $parseInfo;
    }

    /**
     * 京东联盟搜索
     * http://www.dataoke.com/kfpt/api-d.html?id=70
     * @param $params
     * @return array|mixed
     */
    public function jdGoodsSearch($params)
    {
        $client = $this->client;
        $client->version = 'v1.0.0';
        $client->host = 'https://openapi.dataoke.com/api/dels/jd/goods/search';
        $response = $client->request($params);
        $result = json_decode($response, true);
        $goodsList = [];
        if ($result['code'] == 0) {
            $goodsList = $result['data']['list'];
        }
        return $goodsList;
    }

    /**
     * 京东商品转链
     * http://www.dataoke.com/kfpt/api-d.html?id=52
     * @param $url
     * @param $positionId
     * @return mixed|string
     */
    public function jdPromotionUnionConvert($url)
    {
        $client = $this->client;
        $client->version = 'v1.0.0';
        $client->host = 'https://openapi.dataoke.com/api/dels/jd/kit/promotion-union-convert';
        $params['unionId'] = config('jd.union_id');
        $params['materialId'] = $url;
        $response = $client->request($params);
        $result = json_decode($response, true);
        $unionUrl = '';
        if ($result['code'] == 0) {
            $unionUrl = $result['data']['shortUrl'];
        }
        return $unionUrl;
    }

    /**
     * 京东商品批量转链
     * http://www.dataoke.com/kfpt/api-d.html?id=78
     * @param $content
     * @param $positionId
     * @return mixed|string
     */
    public function jdBatchPromotionUnionConvert($content)
    {
        $client = $this->client;
        $client->version = 'v1.0.0';
        $client->host = 'https://openapi.dataoke.com/api/dels/jd/kit/content/promotion-union-convert';
        $params['unionId'] = config('jd.union_id');
        $params['content'] = $content;
        $response = $client->request($params);
        $result = json_decode($response, true);
        $unionContent = '';
        if ($result['code'] == 0) {
            $unionContent = $result['data']['content'];
        }
        return $unionContent;
    }

    /**
     * 获取淘宝订单列表
     * @param $params
     * @return array|mixed
     */
    public function getTbOrderDetails($params)
    {
        $client = $this->client;
        $client->version = 'v1.0.0';
        $client->host = 'https://openapi.dataoke.com/api/tb-service/get-order-details';
        $orderData = [];
        try {
            $response = $client->request($params);
            $result = json_decode($response, true);
            if ($result['code'] == 0) {
                $orderData = $result['data'];
            }
        } catch (\Exception $e) {
            \Log::error('Dataoke getTbOrderDetails fail' . $e->getMessage());
        }
        return $orderData;
    }

    /**
     * 获取京东订单列表
     * https://www.dataoke.com/kfpt/api-d.html?id=51
     * @param $params
     * @return array|mixed
     */
    public function getJdOrderDetails($params)
    {
        $client = $this->client;
        $client->version = 'v1.0.0';
        $client->host = 'https://openapi.dataoke.com/api/dels/jd/order/get-official-order-list';
        $orderData = [];
        $params['key'] = config('dataoke.jd_authorization_key');
        try {
            $response = $client->request($params);
            $result = json_decode($response, true);
            if ($result['code'] == 0) {
                $orderData = $result['data'];
            }
        } catch (\Exception $e) {
            \Log::error('Dataoke getJdOrderDetails fail' . $e->getMessage());
        }
        return $orderData;
    }

    public function contentParse($content)
    {
        $client = $this->client;
        $client->version = 'v1.0.0';
        $client->host = 'https://openapi.dataoke.com/api/dels/kit/contentParse';
        $params = ['content' => $content];
        $data = [];
        try {
            $response = $client->request($params);
            $result = json_decode($response, true);
            if ($result['code'] == 0) {
                $data = $result['data'];
            }
        } catch (\Exception $e) {
            \Log::error('Dataoke contentParse fail' . $e->getMessage());
        }
        return $data;
    }

    /**
     * 线报
     * https://www.dataoke.com/kfpt/api-d.html?id=62
     * @param $selectTime ush-整点抢购时的时间戳（秒），示例：1617026400
     * @return array|mixed
     */
    public function listTipOff($selectTime)
    {
        $client = $this->client;
        $client->version = 'v4.0.0';
        $client->host = 'https://openapi.dataoke.com/api/dels/spider/list-tip-off';
        $params = ['selectTime' => $selectTime];
        $data = [];
        try {
            $response = $client->request($params);
            $result = json_decode($response, true);
            if ($result['code'] == 0) {
                $data = $result['data'];
            }
        } catch (\Exception $e) {
            \Log::error('Dataoke listTipOff fail'.$e->getMessage());
        }
        return $data;
    }
}
