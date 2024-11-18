<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // Properti dan metode lainnya pada model Post
    protected $fillable = ['title', 'author', 'slug', 'body'];

    protected $with = ['author', 'category'];
    
    public function author(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false, 
            fn ($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );
    }
        
    
}