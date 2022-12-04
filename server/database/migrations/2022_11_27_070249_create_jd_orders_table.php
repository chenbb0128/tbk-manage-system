<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJdOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jd_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_id', 50)->comment('标记唯一订单行：订单+sku维度的唯一标识');
            $table->string('order_no')->default('')->comment('买家在京东后台显示的订单编号');
            $table->string('sup_order_no')->default('')->comment('父订单号(多个商品同时下单才存在)');
            $table->string('goods_id', 20)->default('')->comment('商品ID');
            $table->tinyInteger('order_status')->index()->default(0)->comment('订单状态');
            $table->string('goods_name')->index()->comment('商品名称');
            $table->string('goods_image')->comment('商品图片')->default('');
            $table->string('shop_name')->default('')->comment('店铺名称');
            $table->string('shop_id', 20)->default('')->comment('店铺ID');
            $table->integer('goods_count')->default(0)->comment('商品数量');
            $table->integer('goods_frozen_count')->default(0)->comment('商品售后中数量');
            $table->integer('goods_return_count')->default(0)->comment('商品已退货数量');
            $table->timestamp('order_created_at')->nullable()->comment('订单创建时间');
            $table->timestamp('order_finish_at')->nullable()->comment('订单完成时间');
            $table->timestamp('order_update_at')->nullable()->comment('订单更新时间');
            $table->decimal('payment_money')->nullable()->comment('付款金额');
            $table->float('commission_rate')->nullable()->comment('佣金比率');
            $table->float('subside_rate')->nullable()->comment('分成比率');
            $table->float('subsidy_rate')->nullable()->comment('补贴比率');
            $table->float('final_rate')->nullable()->comment('最终分佣比例（单位：%）=分成比例+补贴比例');
            $table->decimal('estimate_cos_price')->nullable()->comment('预估计佣金额');
            $table->decimal('estimate_fee')->nullable()->comment('预估佣金');
            $table->decimal('actual_cos_price')->nullable()->comment('实际计佣金额');
            $table->decimal('actual_fee')->nullable()->comment('实际佣金');
            $table->timestamp('jd_settle_at')->nullable()->comment('京东结算时间');
            $table->string('balance_ext')->default('')->comment('计佣扩展信息，表示结算月:每月实际佣金变化情况');
            $table->string('position_id')->default('')->comment('推广位ID');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jd_orders');
    }
}
