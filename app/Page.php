<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function group()
    {
        return $this->hasMany('App\Group', 'group_id', 'id');
    }

    // public function type()
    // {
    //     return $this->hasMany('App\Type', 'product_id', 'id');
    // }
    public function type()
    {
        return $this->hasMany('App\Type', 'product_id', 'id');
    }

}