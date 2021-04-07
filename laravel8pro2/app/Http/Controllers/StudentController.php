<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function fetchStudents()
    {
        $students = Student::whereBetween('id',[3,33])->orderBy('name','ASC')->get();//for descending DESC
        return $students;
    }
}
