<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['match_type'];

    public function materials()
    {
        return $this->hasManyThrough(
            Material::class,
            ReplyActionMap::class,
            'reply_id',
            'id',
            'id',
            'model_id'
        )->where('model_type', ReplyActionMap::MATERIAL_TYPE);
    }

    public function events()
    {
        return $this->hasManyThrough(
            Material::class,
            ReplyActionMap::class,
            'reply_id',
            'id',
            'id',
            'model_id'
        )->where('model_type', ReplyActionMap::EVENT_TYPE);
    }

    public function keywords()
    {
        return $this->hasMany(ReplyKeyword::class, 'reply_id', 'id');
    }
}
