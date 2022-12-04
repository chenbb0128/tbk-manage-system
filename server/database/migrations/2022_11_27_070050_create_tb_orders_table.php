<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_no')->default('')->comment('买家在淘宝后台显示的订单编号');
            $table->string('sub_order_no')->unique()->comment('每个商品对应订单编号');
            $table->string('goods_id', 100)->default('')->comment('商品ID');
            $table->string('goods_sign')->default('')->comment('商品签名');
            $table->string('goods_name')->index()->comment('商品名称');
            $table->integer('goods_count')->comment('商品数量');
            $table->string('goods_image')->comment('商品图片')->default('');
            $table->string('order_type')->index()->comment('订单类别');
            $table->tinyInteger('order_status')->index()->default('0')->comment('订单状态');
            $table->tinyInteger('settle_account_status')->index()->default('0')->comment('结算状态');
            $table->timestamp('order_created_at')->nullable()->comment('订单创建时间');
            $table->timestamp('payment_at')->nullable()->comment('付款时间');
            $table->timestamp('tb_payment_at')->nullable()->comment('淘宝付款时间');
            $table->decimal('payment_money')->nullable()->comment('付款金额');
            $table->decimal('settle_account_money')->nullable()->comment('结算金额');
            $table->timestamp('tb_settle_at')->nullable()->comment('淘宝结算时间');
            $table->decimal('service_money')->nullable()->comment('服务费');
            $table->float('commission_rate')->nullable()->comment('佣金比率');
            $table->decimal('pre_payment_income')->nullable()->comment('付款预收入');
            $table->decimal('pre_settle_account_income')->nullable()->comment('结算预预估收入');
            $table->string('adzone_id')->default('')->comment('推广位ID');
            $table->tinyInteger('rights_protection')->index()->default('0')->comment('是否维权');
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
        Schema::dropIfExists('tb_orders');
    }
}
