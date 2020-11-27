<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getIndex(){

        return view('pages.search');
    }

    public function postSearch(Request $r) {
        // dd($r->all());
        $students = Students::where('nfc_id', '=', $r->studentnumber)->get();
        var_dump($students);

        return view('pages.search', [
            'students' => $students
        ]);

    }
}
