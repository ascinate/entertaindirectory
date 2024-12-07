<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adposition extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'dimensions',
        'price_per_day',
        'description',
    ];
}
