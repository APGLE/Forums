<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'forum_id', 'user_id', 'title', 'description',
    ];

    public function forum(): BelongsTo {
    	return $this->belongsTo(Forum::class, 'forum_id');
    }

    public function owner(): BelongsTo {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function replies(): HasMany {
    	return $this->hasMany(Reply::class);
    }
}