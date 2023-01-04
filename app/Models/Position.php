<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    protected $guarded = false;

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
