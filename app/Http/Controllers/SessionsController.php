<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        if (auth()->attempt(request(['username', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Invalid login details, please try again.',
            ]);
        }

        return redirect()->to('./');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('./');
    }
}
