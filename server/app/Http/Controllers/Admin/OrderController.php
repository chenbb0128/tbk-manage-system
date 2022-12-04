<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\JdOrder;
use App\Models\TbOrder;
use Illuminate\Http\Request;

class OrderController extends BaseController
{
    public function tbOrders(Request $request)
    {
        $limit = $request->input('limit', 10);
        $orders = TbOrder::orderBy('id', 'desc')->paginate($limit);
        return $this->success($orders);
    }

    public function jdOrders(Request $request)
    {
        $limit = $request->input('limit', 10);
        $orders = JdOrder::orderBy('id', 'desc')->paginate($limit);
        return $this->success($orders);
    }
}
