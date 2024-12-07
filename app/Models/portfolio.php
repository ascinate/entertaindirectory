<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class portfolio extends Model
{
    public $timestamps = false;
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'user_id',
        'title',
        'media_type',
        'media_files',
        'description',
        'post_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
