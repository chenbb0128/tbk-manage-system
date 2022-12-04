<?php

namespace App\Constants;

class JdOrderStatus
{
    const UNKNOWN = -1;
    const INVALID_SPLIT_ORDER = 2;
    const INVALID_CANCEL = 3;
    const INVALID_JD_BANGBANGZHU_ORDER = 4;
    const INVALID_ACCOUNT_EXCEPTION = 5;
    const INVALID_GIFT = 6;
    const INVALID_SCHOOL_ORDER = 7;
    const INVALID_COMPANY_ORDER = 8;
    const INVALID_GROUP_BUY_ORDER = 9;
    const INVALID_RURAL_ORDER = 11;
    const INVALID_VIOLATION_ORDER = 13;
    const INVALID_SOURCE_DIFFERENT = 14;
    const WAIT_PAYMENT = 15;
    const PAYMENT = 16;
    const RECEIPT = 17;
    const INVALID_REPETITION_ORDER = 20;
    const INVALID_CLOUD_STORE_ORDER = 21;
    const INVALID_PLUS_FEE_ZERO = 22;
    const INVALID_PAYMENT_GIFT = 23;
    const PAY_DEPOSIT = 24;

    public static function values()
    {
        return [
            self::UNKNOWN,
            self::INVALID_SPLIT_ORDER,
            self::INVALID_CANCEL,
            self::INVALID_JD_BANGBANGZHU_ORDER,
            self::INVALID_ACCOUNT_EXCEPTION,
            self::INVALID_GIFT,
            self::INVALID_SCHOOL_ORDER,
            self::INVALID_COMPANY_ORDER,
            self::INVALID_GROUP_BUY_ORDER,
            self::INVALID_RURAL_ORDER,
            self::INVALID_VIOLATION_ORDER,
            self::INVALID_SOURCE_DIFFERENT,
            self::WAIT_PAYMENT,
            self::PAYMENT,
            self::RECEIPT,
            self::INVALID_REPETITION_ORDER,
            self::INVALID_CLOUD_STORE_ORDER,
            self::INVALID_PLUS_FEE_ZERO,
            self::INVALID_PAYMENT_GIFT,
            self::PAY_DEPOSIT,
        ];
    }

    public static function getName($value)
    {
        $map = [
            self::UNKNOWN => '未知',
            self::INVALID_SPLIT_ORDER => '无效-拆单',
            self::INVALID_CANCEL => '无效-取消',
            self::INVALID_JD_BANGBANGZHU_ORDER => '无效-京东帮帮主订单',
            self::INVALID_ACCOUNT_EXCEPTION => '无效-账号异常',
            self::INVALID_GIFT => '无效-赠品类目不返佣',
            self::INVALID_SCHOOL_ORDER => '无效-校园订单',
            self::INVALID_COMPANY_ORDER => '无效-企业订单',
            self::INVALID_GROUP_BUY_ORDER => '无效-团购订单',
            self::INVALID_RURAL_ORDER => '无效-乡村推广员下单',
            self::INVALID_VIOLATION_ORDER => '无效-违规订单',
            self::INVALID_SOURCE_DIFFERENT => '无效-来源与备案网址不符',
            self::WAIT_PAYMENT => '待付款',
            self::PAYMENT => '已付款',
            self::RECEIPT => '已完成（购买用户确认收货）',
            self::INVALID_REPETITION_ORDER => '无效-此复购订单对应的首购订单无效',
            self::INVALID_CLOUD_STORE_ORDER => '无效-云店订单',
            self::INVALID_PLUS_FEE_ZERO => '无效-PLUS会员佣金比例为0',
            self::INVALID_PAYMENT_GIFT => '无效-支付有礼',
            self::PAY_DEPOSIT => '已付定金',
        ];
        return $map[$value] ?? '未知';
    }

    public static function getInvalidStatus()
    {
        return [
            self::INVALID_SPLIT_ORDER,
            self::INVALID_CANCEL,
            self::INVALID_JD_BANGBANGZHU_ORDER,
            self::INVALID_ACCOUNT_EXCEPTION,
            self::INVALID_GIFT,
            self::INVALID_SCHOOL_ORDER,
            self::INVALID_COMPANY_ORDER,
            self::INVALID_GROUP_BUY_ORDER,
            self::INVALID_RURAL_ORDER,
            self::INVALID_VIOLATION_ORDER,
            self::INVALID_SOURCE_DIFFERENT,
            self::INVALID_REPETITION_ORDER,
            self::INVALID_CLOUD_STORE_ORDER,
            self::INVALID_PLUS_FEE_ZERO,
            self::INVALID_PAYMENT_GIFT,
        ];
    }
}