<?php

namespace App\Constants;

class TbOrderStatus
{
    // 12-付款，13-关闭，14-确认收货，3-结算成功;不传，表示所有状态
    const PAYMENT = 12;
    const CLOSE = 13;
    const RECEIPT = 14;
    const SETTLEMENT = 3;

    public static function values()
    {
        return [
            self::PAYMENT,
            self::CLOSE,
            self::RECEIPT,
            self::SETTLEMENT
        ];
    }

    public static function getName($value)
    {
        $map = [
            self::PAYMENT => '付款',
            self::CLOSE => '关闭',
            self::RECEIPT => '确认收货',
            self::SETTLEMENT => '结算成功'
        ];
        return $map[$value] ?? '未知状态';
    }
}