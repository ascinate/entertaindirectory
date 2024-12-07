<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adanalytic extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'ad_id',
        'position_id',
        'views',
        'clicks',
        'date',
    ];
}
