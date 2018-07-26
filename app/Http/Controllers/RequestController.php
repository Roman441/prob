<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request;

class RequestController extends Controller
{
    public function index()
    {
	return Request::all();
    }
    public function create()
    {
    }

    public function store(Request $request)
    {
	$ar = Request::create($request->all());

	return response()->json($ar, 201);
    }

    public function show($id)
    {
	return Request::find($id);
    }

    public function edit(Request $request)
    {
    }

    public function update(Request $req, Request $product)
    {
	$product->update($req->all());
	
	return response()->json($product, 200);
    }

    public function destroy(Request $request)
    {
	$request->delete();

	return response()->json(null, 204);
    }
}
