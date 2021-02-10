<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Role extends Eloquent
{
    protected $collection = 'role';
    protected $fillable = ['name', 'picture', 'description'];

    public function actions() {
        return $this->belongsToMany('App\Models\Action');
    }

    public function players() {
        return $this->hasMany('App\Models\Player');
    }
}
