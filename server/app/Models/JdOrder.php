<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JdOrder extends Model
{
    protected $fillable = [
        'unique_id',
        'order_no',
        'sup_order_no',
        'goods_id',
        'order_status',
        'goods_name',
        'shop_name',
        'shop_id',
        'goods_count',
        'goods_frozen_count',
        'goods_return_count',
        'order_created_at',
        'order_finish_at',
        'order_update_at',
        'payment_money',
        'commission_rate',
        'subside_rate',
        'subsidy_rate',
        'final_rate',
        'estimate_cos_price',
        'estimate_fee',
        'actual_cos_price',
        'actual_fee',
        'jd_settle_at',
        'balance_ext',
        'position_id',
        'goods_image'
    ];
}
