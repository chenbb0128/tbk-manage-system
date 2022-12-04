<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('v1')->namespace('Admin')
    ->name('admin.v1.')
    ->middleware(['cors', 'admin.guard'])
    ->group(function () {
        Route::post('/login', 'AuthorizationsController@login')->name('login');
        Route::middleware('admin.refresh')->group(function () {
            Route::get('/logout', 'AuthorizationsController@logout')->name('logout');
            // 管理员接口
            Route::get('/info', 'AdminUserController@info')->name('info');
            Route::get('/adminUser', 'AdminUserController@index')->name('adminUser.index');
            Route::get('/adminUser/{adminUser}', 'AdminUserController@show')->name('adminUser.show');
            Route::post('/adminUser', 'AdminUserController@store')->name('adminUser.store');
            Route::put('/adminUser/{id}', 'AdminUserController@update')->name('adminUser.update');

            // 回复
            Route::get('/reply', 'ReplyController@index')->name('reply.index');
            Route::get('/reply/{reply}', 'ReplyController@show')->name('reply.show');
            Route::post('/reply', 'ReplyController@store')->name('reply.store');
            Route::put('/reply/{id}', 'ReplyController@update')->name('reply.update');

            // 素材库
            Route::get('/material/images', 'MaterialController@images')->name('material.images');
            Route::get('/material/texts', 'MaterialController@texts')->name('material.texts');
            Route::post('/material/textStore', 'MaterialController@textStore')->name('material.textStore');
            Route::put('/material/textUpdate/{id}', 'MaterialController@textUpdate')->name('material.textUpdate');

            // 定时任务
            Route::get('/schedule', 'ScheduleController@index')->name('schedule.index');

            // 淘宝订单列表
            Route::get('/order/tbOrders', 'OrderController@tbOrders')->name('order.tbOrders');
            Route::get('/order/jdOrders', 'OrderController@jdOrders')->name('order.jdOrders');
            Route::get('/order/pddOrders', 'OrderController@pddOrders')->name('order.pddOrders');
        });
    });
