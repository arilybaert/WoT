<?php

namespace App\Mail;
use App\Models\Students;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ArteveldeCoronaAlert extends Mailable
{
    public $students;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    // public function __construct(Students $students)
    {
        // $this->students = $students;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.covidAlert');
    }
}
