<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    use HasFactory;

    public function profile():HasOne{
        return $this->hasOne(Profile::class);
    }
    public function comunities():BelongsToMany {
        return $this->belongsToMany(Comunity::class, 'user_comunities', 'user_id', 'comunity_id');
    }
    public function posts():HasMany {
        return $this->hasMany(Post::class);
    }
}
