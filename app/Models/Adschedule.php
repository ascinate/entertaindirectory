<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adschedule extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'ad_id',
        'position_id',
        'start_time',
        'end_time',
        'status',
    ];
}
