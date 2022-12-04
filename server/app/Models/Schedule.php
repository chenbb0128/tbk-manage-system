<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['title', 'cron_time', 'object_type', 'object_ids', 'model_type', 'model_id'];

    const CONTACT = 0;
    const ROOM = 1;

    public function materials()
    {
        return $this->hasManyThrough(
            Material::class,
            ScheduleActionMap::class,
            'schedule_id',
            'id',
            'id',
            'model_id'
        )->where('model_type', ScheduleActionMap::MATERIAL_TYPE);
    }

    public function events()
    {
        return $this->hasManyThrough(
            Material::class,
            ScheduleActionMap::class,
            'schedule_id',
            'id',
            'id',
            'model_id'
        )->where('model_type', ScheduleActionMap::EVENT_TYPE);
    }
}
