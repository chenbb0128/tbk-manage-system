<?php

namespace App\Constants;

class OrderType
{
    const TAOBAO = 0;
    const JD = 1;

    public static function values()
    {
        return [
            self::TAOBAO,
            self::JD,
        ];
    }

    public static function getName($value)
    {
        $map = [
            self::TAOBAO => '淘宝',
            self::JD => '京东',
        ];
        return $map[$value] ?? '未知类别';
    }
}
