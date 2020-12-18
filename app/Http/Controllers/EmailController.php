<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MyTestMail;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendAlert(Request $r) {
        // dd(json_decode($r->ids[0]));
        $studentsInfo = $r->ids;


        $details = [
            'name' => 'Ari',
            'body' => " Ge zij nen tish"
        ];

        // Loop over emails:
        foreach ($studentsInfo as $recipient) {

            $students = Students::where('nfc_id', '=', json_decode($recipient)->nfc_id)->get();
            // dd($student);
            Mail::to($recipient)->send(new MyTestMail($students));
        }

        dd("Email is sent");
    }
}
