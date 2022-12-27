<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Database\Eloquent\Collection;

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
    public function validationlogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $remmeberMe = true;
        if ($request->remmeberMe == null) {
            $remmeberMe = false;
        }
        $cred = $request->only('email', 'password');
        if (Auth::attempt($cred, $remmeberMe)) {
            if ($remmeberMe == true) {
                Cookie::queue('last_logged', $request->email, 60);
            }
            return redirect()->route('home');
        }
        return redirect()->back()->withErrors('Invalid credentials');
    }
    public function home()
    {
        $category = Category::all();
        $product = Product::All();
        return view('home', ['category' => $category], ['product' => $product]);
    }
    public function category($name)
    {
        $category = Category::all();
        $categories = Category::where('name', '=', $name)->first();
        $product = $categories->product()->paginate(2);

        return view('category', ['category' => $category,  'product' => $product, 'categories' => $categories]);
    }

    // product detail
    public function productDetail($id)
    {

        $product = Product::with('category')->where('id', '=', $id)->first();
        $category = Category::all();
        return view('product-detail', ['product' => $product, 'category' => $category]);
    }

    public function search(Request $req)
    {

        $category = Category::all();
        $name = $req->search;
        $product = Product::where('name', 'LIKE', '%' . $name . '%')->get();

        return view('search', ['category' => $category, 'product' => $product]);
    }
    
    // manage product
    public function manageProduct()
    {
        $category = Category::all();
        $product = Product::all();
        // dd($product);
        return view('manage-product', ['category' => $category], ['product' => $product]);
    }

    // new product
    public function newProduct()
    {
        $category = Category::all();
        $product = Product::all();
        // dd($product);
        return view('new-product', ['category' => $category], ['product' => $product]);
    }
}
