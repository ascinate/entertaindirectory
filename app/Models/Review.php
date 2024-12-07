<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'performer_id',
        'name',
        'email',
        'rating',
        'review',
        'status',
    ];

    public function performer()
    {
        return $this->belongsTo(User::class, 'performer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
