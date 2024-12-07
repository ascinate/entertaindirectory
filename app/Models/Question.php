<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['category_id', 'question', 'field_type'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    
}
