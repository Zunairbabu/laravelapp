<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
//protected $table->Student;
    protected $fillable = ['s_name','address','pas_year'];



    public function course()
    {
        return $this->hasMany('App/Course');

    }
    //
}
