<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Action extends Eloquent
{
    protected $collection = 'action';
    protected $fillable = ['name', 'medication', 'murder', 'checkrole', 'blockrole'];

    public function roles() {
        return $this->belongsToMany('App\Models\Role');
    }
}
