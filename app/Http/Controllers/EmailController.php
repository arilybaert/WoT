<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendAlert() {
        $details = [
            'name' => 'Ari',
            'body' => " You've been in in contact with someone who has tested positive with COVID-19. We kindly advise you to make an appointment with a testcenter ASAP. Until we get the testresults you've been excuses from all classes"
        ];
        // \Mail::to('ari_lybaert@outlook.com')->send(new \App\Mail\MyTestMail($details));

        // Loop over emails:
        // foreach (['taylor@example.com', 'dries@example.com'] as $recipient) {
        //     Mail::to($recipient)->send(new OrderShipped($order));
        // }



        Mail::to('ari_lybaert@outlook.com')->send(new MyTestMail($details));
        dd("Email is sent");
    }
}
