<?php

namespace App\Http\Controllers;

use App\Models\Classrooms_Students;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    /*
    Loop over exam scans and find all different classrooms
    */
    public function getIndex(){

        $classrooms = Classrooms_Students::where('exam', '=', 1)
        ->groupBy('classroom_id')
        ->get();

        return view('pages.exams', [
             'classrooms' => $classrooms
         ]);
     }

     /*
     Loop over scans and find all dates for a specific classroom
     */
     public function getDates($id){
        $dates = Classrooms_Students::where('exam', '=', 1)
        ->where('classroom_id', '=', $id)
        ->groupBy('scan_date')
        ->get();

        return view('pages.dates', [
            'dates' => $dates,
         ]);
     }

     /*
     Display all students for specific date in specific classroom
     */
     public function getExamsStudent($date, $id){
        $students = Classrooms_Students::where('exam', '=', 1)
        ->where('classroom_id', '=', $id)
        ->where('scan_date', '=', $date)
        ->orderBy('scan_time', 'desc')
        ->groupBy('student_id')
        ->get();


         return view('pages.examsStudents', [
             'students' => $students
         ]);
     }
}
