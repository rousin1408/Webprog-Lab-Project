<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function regis()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi ',
            'min' => ':attribute harus diisi minimal :min karakter ',
            'max' => ':attribute harus diisi maksimal :max karakter ',
            'before' => ':attribute harus sebelum tanggal hari ini',
            'after' => ':attribute harus sesudah tanggal 01/01/1900',
        ];
        $this->validate($request, [
            'Name' => 'required|min:5',
            'Email' => 'required|email',
            'Password' => 'required|alpha_num|min:8|required_with:password_confirmation|same:password_confirmation',
            'confirm password' => 'required|alpha_num|min:8',
            'Gender' => 'required',
            'start_date_field' => 'date',
            'Date of birth' => 'required|after:01/01/1900|before:start_date_field',
            'Country' => 'required'
        ], $messages);


        return view('register', ['data' => $request]);
    }
}
