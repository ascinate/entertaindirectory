<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;

    // Define the fillable fields
    protected $fillable = [
        'artistid',
        'event_title',
        'event_type',
        'location',
        'date',
        'description',
        'media_files',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

