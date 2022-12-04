<?php

namespace App\Constants;

class TbOrderType
{
    const TAOBAO = '淘宝';
    const TIANMAO = '天猫';
    const TIANMAOGUOJI = '天猫国际';
    const ELEME = '饿了么';
    const JUHUASUAN = '聚划算';

    public static function values()
    {
        return [
            self::TAOBAO,
            self::TIANMAO,
            self::TIANMAOGUOJI,
            self::ELEME,
            self::JUHUASUAN
        ];
    }
}