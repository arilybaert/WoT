<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Classrooms_Students;


class StudentsController extends Controller
{
    use HasFactory;
    public function getIndex(Request $r){
        dd($r);
        $d = $r->date;

        $timeFrame = 2;
        $t = $r->time;
        $phpTime =  strtotime($t);

        $maxReadableTime = date("H:i:s", strtotime('+' . $timeFrame . ' hours', $phpTime));
        $minReadableTime = date("H:i:s", strtotime('-' . $timeFrame . ' hours', $phpTime));



        $classrooms = Classrooms_Students::where('scan_time', '>', $minReadableTime)
        ->where('scan_time', '<', $maxReadableTime)
        ->where('scan_date', '=', $d)
        ->get();

        // dd($classrooms);

        return view('pages.students', [
            "classrooms" => $classrooms,
            "classroom" => $classrooms[0]
    ]);
    }
}
