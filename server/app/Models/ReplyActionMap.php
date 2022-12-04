<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReplyActionMap extends Model
{
    protected $fillable = ['reply_id', 'model_type', 'model_id'];

    CONST MATERIAL_TYPE = 0;
    CONST EVENT_TYPE = 1;
}

