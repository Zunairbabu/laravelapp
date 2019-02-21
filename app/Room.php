<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    public function course()
    {
        return $this->hasOne('App/Course');




    }
    //
}
