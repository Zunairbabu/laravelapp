<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $with=['student','course_instructor','room'];
    public function student()
    {
        return $this->belongsTo('App/Student');


    }

    public function course_instructor()
    {
        return $this->belongsTo('App/Course_instructor');



    }
    public function room()
    {
        return $this->belongsTo('App/Room');

    }
    //
}
