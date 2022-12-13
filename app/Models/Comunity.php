<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comunity extends Model
{
    use HasFactory;
    
    public function users():BelongsToMany {
        return $this->belongsToMany(User::class, 'user_comunities', 'comunity_id', 'user_id');
    }
    public function posts():HasMany {
        return $this->hasMany(Post::class);
    }
}