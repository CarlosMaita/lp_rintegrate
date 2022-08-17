<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InterestController extends Controller
{

    public function index()
    {
        $interests = Interest::all();
        return view('crm.interests', compact('interests'));
    }

    public function store(Request $request)
    {
        $interest = new Interest();
        $interest->name = $request->name;
        $interest->slug = Str::slug($request->name) ;
        $interest->save();
        return redirect()->route('interests.index');
    }

    public function create ()
    {
       
        return view('crm.create_interests');
    }

    public function edit($id)
    {
        $interest = Interest::find($id);
        return view('crm.edit_interests', compact('interest'));
    }
    
    public function update(Request $request, $id)
    {
        $interest = Interest::find($id);
        $interest->name = $request->name;
        $interest->slug = Str::slug($request->name);
        $interest->save();
        return redirect()->route('interests.index');
    }

    public function destroy($id)
    {
        $interest = Interest::find($id);
        $interest->delete();
        return redirect()->route('interests.index');
    }

}
