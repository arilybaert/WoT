<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getIndex(){

        return view('pages.search');
    }

    public function postSearch(Request $r) {
        dd($r->all());
        return view('pages.search');

    }
}
