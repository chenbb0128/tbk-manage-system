<?php


namespace App\Utils;


class StrUtil
{
    const USER_UID_PREFIX = 0;
    /**
     * 匹配获取url
     * @param $str
     * @return array|mixed
     */
    public static function matchUrl($str)
    {
        $matchUrls = [];
        $pattern = '/[a-zA-z]+:\/\/[^\s]*/';
        $res = preg_match_all($pattern, $str, $matches);
        if ($res) {
            $matchUrls = $matches[0];
        }
        return $matchUrls;
    }

    /**
     * 匹配淘口令字符串
     * @param $str
     * @return false|int
     */
    public static function matchTbTpwd($str)
    {
        $matchStr = [
            "hi:",
            "tb",
            "taobao",
            "\\$",
            "¥",
            "€",
            "₤",
            "₳",
            "¢",
            "¤",
            "฿",
            "₵",
            "₡",
            "₫",
            "ƒ",
            "₲",
            "₭",
            "£",
            "₥",
            "₦",
            "₱",
            "〒",
            "₮",
            "₩",
            "₴",
            "₪",
            "៛",
            "﷼",
            "₢",
            "M",
            "₰",
            "₯",
            "₠",
            "₣",
            "₧",
            "ƒ",
            "￥",
            "\\(",
            "\\)",
            "淘",
            "tao",
            "bao",
            "手"
        ];
        $pattern = '/(' . implode('|', $matchStr) . ')/';
        $res = preg_match($pattern, $str, $matches);
        return $res;
    }

    /**
     * 匹配京东链接
     * @param $str
     * @return false|int
     */
    public static function matchJd($str)
    {
        $pattern = '/(jd\.|jingxi)/';
        $res = preg_match($pattern, $str);
        return $res;
    }

    /**
     * 生成uid
     * @param string $prefix
     * @param string $slat
     * @return string
     */
    public static function getUid($prefix = '', $slat = '')
    {
        $len = strlen($prefix);
        return $prefix . substr(md5(uniqid($slat) . microtime(true)), $len);
    }
}
