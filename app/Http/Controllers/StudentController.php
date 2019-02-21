<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use DB;


class StudentController extends Controller
{
    public function Readstudent(){
        $students = Student::get();
        return response()->json([
            'students' => $students
        ]);



    }

    public function Reterivestudent(){
        $student = DB ::table('students')->where('s_id',1)->get();
          //dd($student);{
            return response()->json([
                'students' => $student

            ]);
    }

  public function updatestudent(){
      $student = DB::table('students')->where('s_id', 1)->update(['s_name' => 'zubair']);
            return response()->json([
            'students'=> $student
        ]);


  }






    //
}
