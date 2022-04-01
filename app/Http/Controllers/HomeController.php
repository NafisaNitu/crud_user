<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product\Product;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.home.home', [
            'products' => Product::all(),
        ]);
    }

    public function index()
    {
        return view('admin.home.home');
    }
}
