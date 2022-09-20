<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $products = Product::where('status','disponible')->get();
        return view('home', compact('products'));
    }

    public function search($search)
    {
        $products = Product::where('name', 'like', '%'.$search.'%')->get();
        return view('home', compact('products'));
    }


    
    
}
