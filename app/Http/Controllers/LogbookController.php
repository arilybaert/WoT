<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogbookController extends Controller
{
    public function getIndex(){

        /*  $students = Students::all();
         var_dump($students); */
         return view('pages.logbook');

     }
}