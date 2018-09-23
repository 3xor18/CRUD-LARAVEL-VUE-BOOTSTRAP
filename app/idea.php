<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idea extends Model
{
    protected $table    = 'ideas';
    protected $fillable = [
        'descripcion', 'url',
    ];
}
