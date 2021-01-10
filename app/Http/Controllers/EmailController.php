<?php

namespace App\Http\Controllers;
// namespace Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Mail\ArteveldeCoronaAlert;
use App\Models\Logbook;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
class EmailController extends Controller
{
    public function sendAlert(Request $r) {
        $studentsInfo = $r->ids;


        // Loop over emails:
        foreach ($studentsInfo as $recipient) {
            $mytime = Carbon::now();
            $students = Students::where('nfc_id', '=', json_decode($recipient)->nfc_id)->get();
            // dd($recipient["email"]);
            Mail::to(json_decode($recipient)->email)->send(new ArteveldeCoronaAlert());
            $log = Logbook::create([
                'student_id' => json_decode($recipient)->nfc_id,
                'notified_on' => $mytime->toDateTimeString()

            ]);
            $log->save();

            /*
            @TODO Pass the student instance to the mail so we can retrieve each students name.

            Mail::to($recipient)->send(new MyTestMail($students));
            */

        }
        $studentsInfo = $studentsInfo;
        // dd($studentsInfo);
        return view('pages.send-email', [
            'emails' => $studentsInfo
        ]);
    }
}
