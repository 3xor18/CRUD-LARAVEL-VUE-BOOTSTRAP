<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idea extends Model
{

    protected $table    = 'ideas';
    public $timestamps  = false;
    protected $fillable = [
        'descripcion', 'fecha',
    ];
}
