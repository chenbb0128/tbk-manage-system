<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->namespace('Api')
    ->name('api.v1.')
    ->group(function () {
        Route::any('test', 'TestController@test')
            ->name('api.test.test');
        Route::any('messageReply', 'RobotController@messageReply')->name('api.robot.messageReply');
        Route::any('syncUsers', 'RobotController@syncUsers')->name('api.robot.syncUsers');
    });
