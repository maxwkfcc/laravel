<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {
        return view('index');
    }

    public function about() {
        $number = 6;
        $names = ["Max","Peter","John"];
        return view('about')->with('number', $number)->with('names', $names);
    }
}
