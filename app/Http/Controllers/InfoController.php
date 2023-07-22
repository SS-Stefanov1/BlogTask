<?php

namespace App\Http\Controllers;

class InfoController extends Controller
{

    public function about()
    {
        return view('info.about');
    }

    public function contact()
    {
        return view('info.contact');
    }
}
