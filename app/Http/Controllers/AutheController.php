<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\DetailTransaction;
use App\Models\HeaderTransaction;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\File;

class AutheController extends Controller
{
    //Autheration
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


        return redirect('login')->with('message', 'Registration Success');
    }
    public function validationlogin(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $rememberMe = true;
        if ($req->remember == null) {
            $rememberMe = false;
        }

        $cred = $req->only('email', 'password');
        if (Auth::attempt($cred, $rememberMe)) {
            if ($rememberMe == true) {
                Cookie::queue('last_logged', $req->email, 120);
            }
            if (Auth::user()->role == 'admin') {
                return redirect()->route('manage-product');
            } else {
                return redirect()->route('home');
            }
        }
        return redirect()->back()->withErrors('Invalid Credentials');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }




    // All Role Can Access
    public function profile()
    {
        $category = Category::all();
        $product = Product::All();
        return view('profile', ['category' => $category], ['product' => $product]);
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
        $product = $categories->product()->paginate(10);

        return view('category', ['category' => $category,  'product' => $product, 'categories' => $categories]);
    }
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






    // Admin Only Can Access
    public function manageProduct()
    {
        $category = Category::all();
        $product = Product::all();
        // dd($product);
        return view('manage-product', ['category' => $category], ['product' => $product]);
    }
    public function NewProduct()
    {
        $category = Category::all();
        $product = Product::all();
        return view('new-product', ['category' => $category], ['product' => $product]);
    }
    public function AddNewProduct(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'category' => 'required',
            'detail' => 'required',
            'price' => 'required|numeric',
            'photo' => 'required|file|image|mimes:jpg,jpeg,png',
        ]);


        $datas = $req->all();
        $datas['photo'] = $req->file('photo')->store('photo');
        Product::create([
            'name' => $datas['name'],
            'category_id' => $datas['category'],
            'detail' => $datas['detail'],
            'price' => $datas['price'],
            'photo' => $datas['photo'],
        ]);

        return redirect('manage-product')->with('message', 'Add Product Success');
    }
    public function DeleteProduct(Product $product)
    {
        Storage::delete($product->photo);
        $product->delete();
        return redirect()->back();
    }
    public function Update($id)
    {
        $product = Product::where('id', '=', $id)->first();
        $category = Category::all();
        return view('update-product', ['category' => $category, 'id' => $id, 'product' => $product]);
    }
    public function UpdateProduct(Product $product, Request $req)
    {
        $req->validate([
            'name' => 'required',
            'category' => 'required',
            'detail' => 'required',
            'price' => 'required|numeric',
            'photo' => 'required|file|image|mimes:jpg,jpeg,png',
        ]);
        $req->all();
        $product->name = $req->name;
        $product->category_id = $req->category;
        $product->detail = $req->detail;
        $product->price = $req->price;
        if ($req->file('photo')) {
            Storage::delete($req->photos);
            $product->photo = $req->file('photo')->store('photo');
        }
        $product->save();
        return redirect('manage-product')->with('message', 'Update Product Success');;
    }
    public function Managesearch(Request $req)
    {

        $category = Category::all();
        $name = $req->search;
        $product = Product::where('name', 'LIKE', '%' . $name . '%')->paginate(10);

        $product->appends(['search' => $name]);

        return view('manage-product', ['category' => $category, 'product' => $product]);
    }








    // User Only Can Access
    public function cart()
    {
        $category = Category::all();
        $product = Product::all();
        $cart = session()->get('cart', []);

        return view('cart', ['category' => $category, 'cart' => $cart], ['product' => $product],);
    }
    public function addcart(Request $req)
    {
        $product_id = $req->input('product_id');
        $quantity = $req->input('quantity');

        $product = Product::find($product_id);

        $cart = session()->get('cart', []);

        $cart[] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'photo' => $product->photo,
        ];
        session()->put('cart', $cart);

        session()->flash('message', 'Item Added to Cart');

        return redirect('cart');
    }
    public function RemoveCart($id)
    {
        $cart = session()->get('cart', []);

        foreach ($cart as $ca => $c) {
            if ($c['id'] == $id) {
                unset($cart[$ca]);
                break;
            }
        }
        session()->put('cart', $cart);

        return redirect('cart');
    }
    public function purchase()
    {
        $cart = session('cart');
        $total_quantity_product = 0;
        $total_price = 0;

        foreach ($cart as $c) {
            $total_quantity_product += $c['quantity'];
            $total_price += $c['quantity'] * $c['price'];
        }
        $HeaderTransaction = HeaderTransaction::create([
            'user_id' => auth()->user()->id,
            'date' => Carbon::now(),
            'total_product' => $total_quantity_product,
            'total_price' => $total_price,
        ]);
        $IdHeader = $HeaderTransaction->id;

        foreach ($cart as $c) {
            DetailTransaction::create([
                'transaction_id' => $IdHeader,
                'product_id' => $c['id'],
                'quantity' => $c['quantity'],
                'total_price_all' => $c['quantity'] * $c['price'],
            ]);
        }
        session()->forget('cart');
        return redirect('/home')->with('message', 'Purchase Success');;
    }
    public function history()
    {
        $category = Category::all();
        $product = Product::all();
        $HeaderTransaction = HeaderTransaction::all();

        $HeaderTransaction = HeaderTransaction::where('user_id', '=', auth()->user()->id)->get();
        $DetailTransaction = HeaderTransaction::whereIn('transaction_id', $HeaderTransaction->pluck('id'))->get();

        $products = Product::all();

        return view('history', ['category' => $category, 'DetailTransaction' => $DetailTransaction, 'transactheader' => $HeaderTransaction, 'transactionHeader' => $HeaderTransaction, 'product' => $product]);
    }

    public function historyDummy(){
        $category = Category::all();
        return view('/history', ['category' => $category]);
    }
}
