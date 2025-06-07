<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {
    protected $fillable = ['filename', 'path', 'mime_type', 'uploaded_by'];

    public function uploader() {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
