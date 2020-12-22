<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ArteveldeCoronaAlert;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendAlert(Request $r) {
        $studentsInfo = $r->ids;


        // Loop over emails:
        foreach ($studentsInfo as $recipient) {

            $students = Students::where('nfc_id', '=', json_decode($recipient)->nfc_id)->get();
            // dd($recipient["email"]);
            Mail::to(json_decode($recipient)->email)->send(new ArteveldeCoronaAlert());

            /*
            @TODO Pass the student instance to the mail so we can retrieve each students name.

            Mail::to($recipient)->send(new MyTestMail($students));
            */

        }

        dd("Email is sent");
    }
}
