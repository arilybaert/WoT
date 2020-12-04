<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function getIndex(){

        /*  $students = Students::all();
         var_dump($students); */
         return view('pages.exams');
     }

     public function getExamsStudent(){

        /*  $students = Students::all();
         var_dump($students); */
         return view('pages.examsStudents');
     }
}
