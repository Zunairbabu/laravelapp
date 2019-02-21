<?php

namespace App\Http\Controllers;

use App\CourseInstructor;
use App\Student;
use App\Room;
use App\Course;
use Illuminate\Http\Request;
//use App\Http\Controllers\DB;

class TestController extends Controller
{


    public function ShowView(){
        return view('auth.test');


}

    public function test()
    {
//        return response()->json(request()->all());
        $student = Student::create([
            's_name' => request('s_name'),
            'address' => request('address'),
            'pas_year'=> request('pas_year')
        ]);
        return response()->json(['Student' => $student]);

    }

    public  function test1()
    {
        $room = Room::create([
            'date' => request('date'),
            'room_loc'=> request('room_loc'),
            'capacity'=>request('capacity')
        ]);
        return response()->json(['Room' => $room]);


    }

    public function test2()
    {
        $course_instructor = CourseInstructor::create([
            'instru_name'=>request('instru_name')
        ]);
        return response()->json(['CourseInstructor' => $course_instructor]);



    }

 public function test3(){
        $course = Course::create([
            //'c_id'=>request('c_id'),
            'c_name'=>request('c_name'),
            'student_id' => request('student_id'),
            'course_instructor_id' => request('course_instructor_id'),
            'room_id' => request('room_id')

        ]);
     return response()->json(['Course' => $course]);


 }


    //
}
