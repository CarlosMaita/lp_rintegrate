<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lead = new Lead;
        $lead->name = $request->name;
        $lead->email = $request->email;
        $lead->phone = $request->phone;
        $lead->status = 'new';
        $lead->source = parse_url($request->header('Referer'), PHP_URL_PATH) ;
        $lead->save();
        
        return redirect()->route('products.gracias', [
            'interest' => $request->interest_slug,
            'product' => $request->product_slug,
        ]);
    }
}
