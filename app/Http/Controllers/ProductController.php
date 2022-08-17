<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $interest
     * @param  string  $product
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('crm.products', compact('products'));
    }

 
    public function create ()
    {
        $interests = Interest::all();
        return view('crm.create_product', compact('interests'));
    }

    public function store (Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->interest_id = $request->interest_id;
        $product->color_main = $request->color_main; 
        $product->image_main = $request->image_main->store('images', 'public');
        $product->image_second = $request->image_second->store('images', 'public');
        $product->image_background = $request->image_background->store('images', 'public');
        $product->features = $request->features;
        $product->title_features = $request->title_features;
        $product->subtitle_features = $request->subtitle_features;
        $product->slug = Str::slug($request->name);
        $product->save();

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $interests = Interest::all();
        return view('crm.edit_product', compact('product', 'interests'));
    }
    
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->interest_id = $request->interest_id;
        $product->color_main = $request->color_main; 
        if($request->image_main != null)
        {
            $product->image_main = $request->image_main->store('images', 'public');
        }
        if($request->image_second != null)
        {
            $product->image_second = $request->image_second->store('images', 'public');
        }
        if($request->image_background != null)
        {
            $product->image_background = $request->image_background->store('images', 'public');
        }
        $product->features = $request->features;
        $product->title_features = $request->title_features;
        $product->subtitle_features = $request->subtitle_features;
        $product->slug = Str::slug($request->name);
        $product->save();
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    


    public function lp($interest, $product)
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
