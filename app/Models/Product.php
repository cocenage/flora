<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description', 'price', 'image', 'category_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
}
