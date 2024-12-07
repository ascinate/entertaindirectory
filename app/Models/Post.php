<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'userid',
        'category',
        'price',
        'transaction',
        'conditions',
        'item_title',
        'item_description',
        'photos',
        'is_featured',
        'created_at',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

}
