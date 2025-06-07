<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $fillable = [
        'slug', 'author_id', 'is_active', 'published_at'
    ];

    protected $dates = ['published_at'];

    public function translations() {
        return $this->hasMany(PostTranslation::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function revisions() {
        return $this->hasMany(Revision::class);
    }
}
