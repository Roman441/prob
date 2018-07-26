<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OwnerController extends Controller
{
    public function index()
    {
	    $owners = Owner::all();
	    //return $posts;
	    return view('owner.index', compact('owners'));


    }

    public function create()
    {
    }

    public function show($id)
    {
       $owner = Owner::find($id);
       $transport = DB::select('select * from transports where owner_id = :id', ['id' => $owner['id']]);
       return view('owner.show', compact('owner'), compact('transport'));
    }
    public function edit(Request $request, $id){
       $owner = Owner::findOrFail($id);
       $owner->update($request->all());
       return redirect()->action('OwnerController@index');
    }
}
