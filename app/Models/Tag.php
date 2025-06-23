<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_tag');
    }
}
