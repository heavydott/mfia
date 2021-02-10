<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Test extends Eloquent
{
    protected $collection = 'test';
    protected $fillable = ['name', 'test'];

    public function atests() {
        return $this->belongsToMany('App\Models\Atest');
    }
}
