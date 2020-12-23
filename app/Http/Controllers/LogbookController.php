<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    public function getIndex(){

        $logs = Logbook::get();

         return view('pages.logbook', [
             'logs' => $logs
         ]);

     }
}
