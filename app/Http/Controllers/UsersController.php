<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
	return User::all();
    }
    public function create()
    {
    }
}
