<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'title',
        'image',
        'description',
        'is_active',

        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
