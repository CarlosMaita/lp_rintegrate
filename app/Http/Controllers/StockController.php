<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    function  index(){
        $products = Product::all();
        return view('crm.stock', compact('products'));
    }

    function edit($id){
        $product = Product::find($id);
        return view('crm.edit_stock', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->stock = $request->stock;
        $product->min_stock = $request->min_stock;
        $product->save();
        return redirect()->route('stock.index');
    }
}
