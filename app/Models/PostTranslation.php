<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model {
    protected $fillable = [
        'post_id', 'language_id', 'title', 'content'
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function language() {
        return $this->belongsTo(Language::class);
    }
}
