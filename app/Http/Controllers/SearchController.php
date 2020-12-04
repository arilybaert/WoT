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



        $students = Students::where('nfc_id', '=', $r->studentnumber)->get();
        $classrooms = Classrooms_Students::where('student_id', '=', $r->studentnumber)
        ->get();

        $t = $classrooms[0]->scan_time;
        $phpTime =  strtotime($t);

        $maxReadableTime = date("H:i:s", strtotime('+' . $timeFrame . ' hours',$phpTime));
        $minReadableTime = date("H:i:s", strtotime('-' . $timeFrame . ' hours',$phpTime));

        $classrooms = Classrooms_Students::where('scan_time', '>', $minReadableTime)
        ->where('scan_time', '<', $maxReadableTime)
        ->groupBy('scan_date')
        ->get();


        $classrooms = Classrooms_Students::where('scan_time', '>', $minReadableTime)
        ->where('scan_time', '<', $maxReadableTime)
        ->selectRaw('*, count(*) AS amount')
        ->groupBy('scan_date')
        ->get();


        // var_dump($classrooms[0]->scan_time);
        // var_dump($classrooms[0]);


        echo $maxReadableTime . ' _ ';
        echo $minReadableTime . ' _ ';


        return view('pages.search', [
            'students' => $students,
            'classrooms' => $classrooms
        ]);

    }
}
