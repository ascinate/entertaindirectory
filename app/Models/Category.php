<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_cat_id')->with('children');
    }

    
   
    
}
