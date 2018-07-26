<?php

namespace App\Http\Controllers;

use App\Proba;
use Illuminate\Http\Request;

class ProbasController extends Controller
{
    public function index()
    {
	return Proba::all();
    }
    public function show(Request $proba)
    {
        return $proba;
    }

}
