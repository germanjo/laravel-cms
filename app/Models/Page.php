<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    protected $fillable = ['slug', 'is_active', 'published_at', 'author_id'];

    public function translations() {
        return $this->hasMany(PageTranslation::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }
}