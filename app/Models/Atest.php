<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Atest extends Eloquent
{
    protected $collection = 'atest';
    protected $fillable = ['name', 'atest'];

    public function tests() {
        return $this->belongsToMany('App\Models\Test');
    }
}
