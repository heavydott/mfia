<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Room extends Eloquent
{
    protected $collection = 'room';
    protected $fillable = ['name', 'steps'];

    public function players() {
        return $this->hasMany('App\Models\Player');
    }
}
