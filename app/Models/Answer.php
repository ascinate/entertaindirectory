<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;
    public $timestamps = false;
   
    protected $fillable = [
        'userid',
        'cat_id',
        'post_id',
        'question_id',
        'answer',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
