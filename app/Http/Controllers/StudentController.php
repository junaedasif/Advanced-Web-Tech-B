<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function list(){
        $student = array();
        for($i=0;$i<10;$i++) {
            $students = array(
                "id" => $i+1,
                "name" => "Student ".($i+1),
                "dept" => "CS"
            );
            $students = (object)$students;
            $student[]=$students;
        }
        // return var_dump($student);
        return view('student.list')
        ->with('student',$student);
        // Assosiative array to object conversion
        // $student = array(
        //     "id"=>1,
        //     "name"=>"Junaed Asif",
        //     "dob"=>"12.12.12"
        // );
        // // return "ok";
        // $student = (object) $student;
        // return var_dump($student);
        // return view('student.list');
    }
    public function create(){
        return view('student.create');
    }
    public function get(){
        $name = "Abu Junaed Mohd Asif";
        $id = "19-40464-1";
        $courses = ["pl1", "pl2", "algorithm", "oop1", "web"];
        return view('student.get')
        ->with('name',$name)
        ->with('id',$id)
        ->with('course',$courses);

    }
}
