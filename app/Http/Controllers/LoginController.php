<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function log()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi ',
            'min' => ':attribute harus diisi minimal :min karakter ',
            'max' => ':attribute harus diisi maksimal :max karakter ',
        ];
        $this->validate($request, [
            'Email' => 'required|email',
            'Password' => 'required|alpha_num|min:8',
        ], $messages);


        return view('login', ['data' => $request]);
    }
}
