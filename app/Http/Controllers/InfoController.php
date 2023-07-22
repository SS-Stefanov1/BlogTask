<?php

namespace App\Http\Controllers;

class InfoController extends Controller
{
    public function team()
    {
        return view('info.team');
    }

    public function hq()
    {
        return view('info.hq');
    }

    public function about()
    {
        return view('info.about');
    }

    public function contact()
    {
        return view('info.contact');
    }
}
