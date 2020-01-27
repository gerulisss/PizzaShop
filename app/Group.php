<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function groups()
    {
    return $this->belongsTo('App\Group');
    }

    public function type()
    {
    return $this->belongsTo('App\Type');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }


}
