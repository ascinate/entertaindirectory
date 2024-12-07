<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;

class Wishlist extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['user_id', 'product_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Post::class, 'product_id');
    }
   
}
