<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function group()
    {
    return $this->belongsTo('App\Group');
    }

    public function type()
    {
    return $this->belongsTo('App\Type');
    }
}
