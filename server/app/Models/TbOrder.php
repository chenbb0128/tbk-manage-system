<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TbOrder extends Model
{
    protected $fillable = [
        'order_no',
        'sub_order_no',
        'goods_id',
        'goods_sign',
        'goods_name',
        'goods_count',
        'order_type',
        'order_status',
        'settle_account_status',
        'order_created_at',
        'payment_at',
        'tb_payment_at',
        'payment_money',
        'settle_account_money',
        'tb_settle_at',
        'service_money',
        'commission_rate',
        'pre_payment_income',
        'pre_settle_account_income',
        'adzone_id',
        'rights_protection',
        'goods_image'
    ];
}
