<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleActionMaps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_action_maps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('schedule_id')->comment('定时任务id');
            $table->tinyInteger('model_type')->comment('行动类别 0:素材回复 1:事件回复');
            $table->bigInteger('model_id')->comment('素材ID或事件ID，根据model_type区分');
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
        Schema::dropIfExists('schedule_action_maps');
    }
}
