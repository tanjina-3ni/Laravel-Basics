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

    public function addStudent()
    {
        return view('add-student');
    }

    public function storeStudent(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $student = new Student();
        $student->name = $name;
        $student->email = $email;
        $student->phone = $phone;
        $student->profilepic = $imageName;
        $student->save();
        return back()->with('student_added','record has been inserted');
    }
}

