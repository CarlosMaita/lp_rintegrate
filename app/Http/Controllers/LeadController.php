<?php

namespace App\Http\Controllers;

use App\Mail\LeadRequest;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;

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

        $to="carlos.maita@rintegrate.com";
        Mail::to($to)
        ->send(new LeadRequest($lead));

        
        return redirect()->route('products.gracias', [
            'interest' => $request->interest_slug,
            'product' => $request->product_slug,
        ]);
    }


    public function index (){
        $leads = Lead::where("status", "!=", "archived")->get();
        return view('crm.leads', compact('leads'));
    }

    public function delete($id){
        $lead = Lead::find($id);
        $lead->status = "archived";
        $lead->save();
        return back();
    }
    
    public function contacted($id){
        $lead = Lead::find($id);
        $lead->status = "contacted";
        $lead->save();
        return back();
    }


}
