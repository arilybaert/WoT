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

        /*
        Search DB for all the scans the requested student made
        */

        $scans = Classrooms_Students::where('student_id', '=', $r->studentnumber)
        ->where('scan_date', '>=', $r->date)
        ->get();
        $students = [];


        if(!$scans->isEmpty()) {

            // Set name variable for view
            $search_student_name = $scans[0]->student->firstname . ' ' . $scans[0]->student->lastname;

            /*
            Check for each scan the student made, if there were oter students within a 2 hour time frame // (time frame can be more or less depending on DB variable)
            */

            foreach ($scans as $scan) {
                $t = $scan->scan_time;
                $phpTime =  strtotime($t);
                $maxReadableTime = date("H:i:s", strtotime('+' . $timeFrame . ' hours',$phpTime));
                $minReadableTime = date("H:i:s", strtotime('-' . $timeFrame . ' hours',$phpTime));


                $students_scans = Classrooms_Students::where('classroom_id', '=', $scan->classroom_id)
                ->where('scan_date', '=', $scan->scan_date)
                ->where('scan_time', '<', $maxReadableTime)
                ->where('scan_time', '>', $minReadableTime)
                ->where('exam', '!=', 1)
                // ->groupBy('student_id')
                ->get();


                foreach ($students_scans as $students_scan) {
                    array_push($students, $students_scan);
                }
            }
            $tempArr = array_unique(array_column($students, 'student_id'));     // remove double scans from array
            $finalStudentsArray = array_intersect_key($students, $tempArr);



            return view('pages.search', [
                'students' => $finalStudentsArray,
                'search_student_name'=> $search_student_name
            ]);
    }else {

        return view('pages.search', [
            'error' => 'Not match found with that student ID or date'
        ]);
    }

    }
}
