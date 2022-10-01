<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller {
    public function index () {
        return view('auth.register');
    }

    public function store(Request $request) {
        // dd($request);

        // Validación
        $this->validate($request, [
            'name'      => ['required', 'max:30'],
            'username'  => ['required', 'min:3', 'max:20', 'unique:users'],
            'email'     => ['required', 'unique:users', 'email', 'max:60'],
            'password'  => ['required']
        ]);
    }
}
