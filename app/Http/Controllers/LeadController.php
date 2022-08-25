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

        // $to="info@rintegrate.com";
        // $asunto ="[IMP] New Lead - Tienda Rintegrate";
        // $mensaje = "Nombre: ". $request->name . " \nEmail: " .  $request->email . " \nTelefono: "  . $request->phone . "\nFuente: ". $request->header('Referer');
        // mail($to,$asunto,$mensaje);
        
        return redirect()->route('products.gracias', [
            'interest' => $request->interest_slug,
            'product' => $request->product_slug,
        ]);
    }


    public function index (){
        $leads = Lead::All();
        return view('crm.leads', compact('leads'));
    }
}
