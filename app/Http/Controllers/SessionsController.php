<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login');
    }
}
