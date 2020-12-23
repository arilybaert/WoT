<?php

namespace App\Http\Controllers;

use App\Models\Classrooms_Students;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function getIndex(){

        $classrooms = Classrooms_Students::where('exam', '=', 1)
        ->groupBy('classroom_id')
        ->get();
        // dd($classrooms);

        return view('pages.exams', [
             'classrooms' => $classrooms
         ]);
     }

     public function getExamsStudent($id){

        // dd($id);

         return view('pages.examsStudents');
     }
}
