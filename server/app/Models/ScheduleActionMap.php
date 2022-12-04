<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleActionMap extends Model
{
    protected $fillable = ['schedule_id', 'model_type', 'model_id'];

    CONST MATERIAL_TYPE = 0;
    CONST EVENT_TYPE = 1;
}
