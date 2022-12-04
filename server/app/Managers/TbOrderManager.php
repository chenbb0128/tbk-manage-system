<?php

namespace App\Managers;


use App\Constants\OrderMoneyExtractStatus;
use App\Constants\OrderType;
use App\Constants\TbOrderStatus;
use App\Constants\TbOrderType;
use App\Models\Material;
use App\Models\TbOrder;
use App\Models\UserOrderMap;
use App\Models\UserTbOrderNoMap;
use App\Utils\TbPidUtil;
use Carbon\Carbon;

class TbOrderManager
{
    public static function createOrUpdateTbOrder($orderData)
    {
        $order = TbOrder::where('sub_order_no', $orderData['trade_id'])->first();
        if (empty($order)) {
            // 不存在，则新增订单
            $order = TbOrder::create([
                'order_no' => $orderData['trade_parent_id'],
                'sub_order_no' => $orderData['trade_id'],
                'goods_id' => isset($orderData['item_id']) ? (string)$orderData['item_id'] : '',
                // 优先保存，后续再解析为goods_id
                'goods_sign' => isset($orderData['item_id']) ? (string)$orderData['item_id'] : '',
                'goods_name' => $orderData['item_title'],
                'goods_count' => $orderData['item_num'],
                'order_type' => $orderData['order_type'],
                'order_status' => $orderData['tk_status'],
                'settle_account_status' => $orderData['tk_status'] === TbOrderStatus::SETTLEMENT,
                'order_created_at' => $orderData['tk_create_time'],
                'payment_at' => $orderData['tk_paid_time'],
                'tb_payment_at' => $orderData['tb_paid_time'],
                'payment_money' => $orderData['pay_price'] ?? ($orderData['alipay_total_price'] ?? 0),
                'settle_account_money' => $orderData['tk_status'] === TbOrderStatus::SETTLEMENT ? $orderData['pay_price'] : 0,
                'tb_settle_at' => $orderData['tk_earning_time'] ?? null,
                'service_money' => $orderData['alimama_share_fee'],
                'commission_rate' => $orderData['total_commission_rate'],
                'pre_payment_income' => $orderData['pub_share_pre_fee'],
                'pre_settle_account_income' => $orderData['pub_share_fee'],
                'adzone_id' => (string)$orderData['adzone_id'],
                'rights_protection' => $orderData['refund_tag'],
                'goods_image' => $orderData['item_img']
            ]);
        } else {
            $order->goods_id = isset($orderData['item_id']) ? (string)$orderData['item_id'] : '';
            $order->goods_sign = isset($orderData['item_id']) ? (string)$orderData['item_id'] : '';
            $order->goods_name = $orderData['item_title'];
            $order->goods_count = $orderData['item_num'];
            $order->order_type = $orderData['order_type'];
            $order->order_status = $orderData['tk_status'];
            $order->settle_account_status = $orderData['tk_status'] === TbOrderStatus::SETTLEMENT;
            $order->order_created_at = $orderData['tk_create_time'];
            $order->payment_at = $orderData['tk_paid_time'];
            $order->tb_payment_at = $orderData['tb_paid_time'];
            $order->payment_money = $orderData['pay_price'] ?? ($orderData['alipay_total_price'] ?? 0);
            $order->settle_account_money = $orderData['tk_status'] === TbOrderStatus::SETTLEMENT ? $orderData['pay_price'] : 0;
            $order->tb_settle_at = $orderData['tk_earning_time'] ?? null;
            $order->service_money = $orderData['alimama_share_fee'];
            $order->commission_rate = $orderData['total_commission_rate'];
            $order->pre_payment_income = $orderData['pub_share_pre_fee'];
            $order->pre_settle_account_income = $orderData['pub_share_fee'];
            $order->adzone_id = (string)$orderData['adzone_id'];
            $order->rights_protection = $orderData['refund_tag'];
            $order->goods_image = $orderData['item_img'];
            $order->save();
        }
        return $order;
    }

    public static function cacheUserTbPid($pid, $goods, $user)
    {
        if (empty($user)) {
            return;
        }
        $info = [
            'create_at' => Carbon::now()->toDateTimeString(),
            'goods_id' => $goods['goods_id'],
            'user_id' => $user['id']
        ];
        $pidArr = explode('_', $pid);
        $adzoneId = end($pidArr);
        // 缓存一天的时间
        \Cache::put($adzoneId, json_encode($info), now()->addDays(1));
    }
}
