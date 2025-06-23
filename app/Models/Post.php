<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'content',
        'slug',
        'publication_date',
        'last_modified_date',
        'status',
        'featured_image_url',
        'views_count'
    ];


    public function posts(): BelongsToMany 
    {
        return $this->belongsToMany(Post::class, 'post_category');
    }

    public function tags(): BelongsToMany 
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function media(): HasMany
    {
        return $this->hasMany(Media::class);
    }

}
