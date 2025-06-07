<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Analytics extends Model {
    protected $fillable = ['type', 'item_id', 'hits', 'date'];

    protected $dates = ['date'];
}
