<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $guarded = [];

    public function getRouteKeyName() {
        return 'slug';
    }
}
