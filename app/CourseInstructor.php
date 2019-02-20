<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_Instructor extends Model
{

    public function course()
    {
        return $this->hasMany('App/Course');




    }
    //
}
