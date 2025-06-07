<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model {
    protected $fillable = [
        'post_id', 'user_id', 'field', 'old_value', 'new_value'
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
