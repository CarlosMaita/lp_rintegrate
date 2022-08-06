<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $interest
     * @param  string  $product
     * @return \Illuminate\Http\Response
     */
    public function index($interest, $product)
    {
        $i = Interest::where('slug', $interest)->first();
        $p = Product::where('slug', $product)->first();
        if(!empty($i)){
            if(!empty($p)){
                return view('lp-product' , compact('i', 'p'));
            }
        }
        App::abort(404);
    }
    
    public function gracias($interest, $product)
    {
        $i = Interest::where('slug', $interest)->first();
        $p = Product::where('slug', $product)->first();
        if(!empty($i)){
            if(!empty($p)){
                return view('lp-gracias' , compact('i', 'p'));
            }
        }
        App::abort(404);
    }
    
}
