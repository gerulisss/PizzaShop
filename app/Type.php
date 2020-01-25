<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function groups()
    {
        return $this->hasMany('App\Group','type_id', 'id');
    }

    public function type()
    {
    return $this->belongsTo('App\Type');
    }
}
