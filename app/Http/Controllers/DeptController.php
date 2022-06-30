<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dept;
use App\Models\student;
use App\Models\teacher;
use App\Models\course;
use App\Models\MappedCourseStudent;
use App\Models\MappedCourseTeacher;

class DeptController extends Controller
{
    //
    function show()
    {
        $Dept = Dept::where('id',1)->first();

        //$teachers = teacher::all();
        //$students = student::all();        
        //$courses = course::all();

        $students = MappedCourseStudent::all();
        $courses = MappedCourseTeacher::all();

        //return view('test')->with('cr',$courses);
        return view('dept.details')->with('Dept',$Dept);/*->with('Dept',$Dept);
                               /* ->with('courses',$courses)
                                ->With('students',$students);*/
    }
}

