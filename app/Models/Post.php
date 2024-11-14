<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Properti dan metode lainnya pada model Post
    protected $fillable = ['title', 'author', 'slug', 'body'];
}