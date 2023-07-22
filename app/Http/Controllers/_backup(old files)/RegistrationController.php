<?php

namespace App\Http\Controllers;

use App\Http\Requets\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    /**
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        return view('registration.create');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */

    public function register(RegistrationRequest $request)
    {

/*
$this->validate(request(), [
'name' => 'required',
'email' => 'required|email',
'password' => 'required',
]);
 */
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('./')->with('success', "Account successfully registered.");
    }
}
