<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    use HasFactory;
    public function getIndex(){
        return view('pages.students');
    }
}
