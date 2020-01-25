<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function group()
    {
        return $this->belongsTo('App\Group', 'group_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Type', 'type_id', 'id');
    }

}
