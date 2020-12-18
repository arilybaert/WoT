<?php

namespace App\Http\Controllers;

use App\Models\Classrooms;
use App\Models\Classrooms_Students;
use App\Models\Students;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getIndex(){

        return view('pages.search');
    }

    public function postSearch(Request $r) {
        // @TODO make this a db
        $timeFrame = 2;
        // dd($r);
        $scans = Classrooms_Students::where('student_id', '=', $r->studentnumber)
        ->where('scan_date', '>', $r->date)
        ->get();
        $students = [];
        $search_student_name = $scans[0]->student->firstname . ' ' . $scans[0]->student->lastname;

        foreach ($scans as $scan) {
            $t = $scan->scan_time;
            $phpTime =  strtotime($t);
            $maxReadableTime = date("H:i:s", strtotime('+' . $timeFrame . ' hours',$phpTime));
            $minReadableTime = date("H:i:s", strtotime('-' . $timeFrame . ' hours',$phpTime));

            $students_scans = Classrooms_Students::where('classroom_id', '=', $scan->classroom_id)
            ->where('scan_date', '=', $scan->scan_date)
            ->where('scan_time', '<', $maxReadableTime)
            ->where('scan_time', '>', $minReadableTime)
            // ->groupBy('student_id')
            ->get();


            foreach ($students_scans as $students_scan) {


                // $students[$students_scan->student_id] = $students_scan;
                array_push($students, $students_scan);
            }
        }
        $tempArr = array_unique(array_column($students, 'student_id'));
        // dd($tempArr);
        dd(array_intersect_key($students, $tempArr));



        // echo '<pre>';

        // foreach ($students as $student ) {

        //     var_dump($student);
        // }
        // echo '</pre>';



        return view('pages.search', [
            'students' => $students_scans,
            'search_student_name'=> $search_student_name
        ]);

    }
}
