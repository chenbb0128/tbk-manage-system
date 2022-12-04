<?php

namespace App\Managers;


use App\Constants\JdOrderStatus;
use App\Constants\OrderMoneyExtractStatus;
use App\Constants\OrderType;
use App\Models\JdOrder;
use App\Models\Material;
use App\Models\User;
use App\Models\UserOrderMap;
use Carbon\Carbon;

class JdOrderManager
{
    public static function createOrUpdateJdOrder($orderData)
    {
        $balanceExt = $orderData['balanceExt'] ? json_decode($orderData['balanceExt'], true) : [];
        $jdSettleAt = $balanceExt ? array_keys($balanceExt)[0] : null;
        $order = JdOrder::updateOrCreate([
            'unique_id' => $orderData['id']
        ], [
            'order_no' => (string)$orderData['orderId'],
            'sup_order_no' => (string)$orderData['parentId'],
            'goods_id' => (string)$orderData['skuId'],
            'order_status' => $orderData['validCode'],
            'goods_name' => $orderData['skuName'],
            'shop_name' => $orderData['goodsInfo']['shopName'] ?? '',
            'shop_id' => $orderData['goodsInfo']['shopId'] ?? 0,
            'goods_count' => $orderData['skuNum'],
            'goods_frozen_count' => $orderData['skuFrozenNum'],
            'goods_return_count' => $orderData['skuReturnNum'],
            'order_created_at' => $orderData['orderTime'],
            'order_finish_at' => $orderData['finishTime'] ?: null,
            'order_update_at' => $orderData['modifyTime'],
            'payment_money' => $orderData['actualCosPrice'],
            'commission_rate' => $orderData['commissionRate'],
            'subside_rate' => $orderData['subSideRate'],
            'subsidy_rate' => $orderData['subsidyRate'],
            'final_rate' => $orderData['finalRate'],
            'estimate_cos_price' => $orderData['estimateCosPrice'],
            'estimate_fee' => $orderData['estimateFee'],
            'actual_cos_price' => $orderData['actualCosPrice'],
            'actual_fee' => $orderData['actualFee'],
            'jd_settle_at' => $jdSettleAt,
            'balance_ext' => $orderData['balanceExt'],
            'goods_image' => $orderData['goodsInfo']['imageUrl'] ?? ''
        ]);
        return $order;
    }

}
