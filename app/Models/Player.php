<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Player extends Eloquent
{
    protected $collection = 'player';
    protected $fillable = ['name', 'male', 'status'];

    public function room() {
        return $this->belongsTo('App\Models\Room');
    }

    public function role() {
        return $this->belongsTo('App\Models\Role');
    }
}
