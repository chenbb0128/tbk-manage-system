<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends BaseController
{
    public function index(Request $request)
    {
        $limit = $request->input('limit');
        $schedules = Schedule::with('materials.image')->paginate($limit);
        return $this->success($schedules);
    }
}
