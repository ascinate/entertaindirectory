<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $timestamps = false;

    // Define the fillable fields
    protected $fillable = [
        'skill_name',
    ];

    
}
