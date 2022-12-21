<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class AutheController extends Controller
{
    public function login()
    {
        $category = Category::all();
        return view('login', ['category' => $category]);
    }
    public function register()
    {
        $countries = Country::all();
        $category = Category::all();
        return view('register', ['countries' => $countries, 'category' => $category]);
    }
    public function validationregistration(Request $request)
    {

        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|unique:users',
            'passwords' => 'required|min:8',
            'confirm_password' => 'required|same:passwords',
            'gender' => 'required',
            'date_of_birth' => 'required|date|after:01/01/1900|before:today',
            'country_id' => 'required',
        ]);
        $datas = $request->all();
        User::create([
            'name' => $datas['name'],
            'email' => $datas['email'],
            'password' => Hash::make($datas['passwords']),
            'gender' => $datas['gender'],
            'date_of_birth' => $datas['date_of_birth'],
            'country_id' => $datas['country_id'],
            'role' => 'user',
        ]);
        return redirect('login');
    }
    public function validationlogin(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);



        $errors = new MessageBag(['password' => ['Wrong Password']]);

        return Redirect::back()->withErrors($errors);
    }
}
