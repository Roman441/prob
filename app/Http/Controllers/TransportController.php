<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transport;
use App\Owner;

class TransportController extends Controller
{
   public function index()
    {
        return Transport::all();
    }
   public function show(){
	$posts = Transport::all();
        return view('transport', compact('posts'));
   }
   public function create(Request $request){
	$owner = Owner::create(['name'=> $request['owner_name'], 'age' => $request['age'], 'buiznes' => $request['buiznes']]);
	$transport = Transport::create(['name' => $request['transport_name'], 'mark' => $request['mark'], 'year_of_issue' => $request['year_of_issue'], 'owner_id' => $owner['id']]);
	return redirect()->action('TransportController@show');
   }
}
