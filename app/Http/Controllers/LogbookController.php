<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    public function getIndex(){

        $logs = Logbook::orderBy('notified_on', 'DESC')->get();

         return view('pages.logbook', [
             'logs' => $logs
         ]);

     }
}
