<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['name', 'type', 'value'];

    const TEXT = 0;
    const IMAGE = 1;

    public function image()
    {
        return $this->hasOne(Image::class, 'id', 'value');
    }
}
