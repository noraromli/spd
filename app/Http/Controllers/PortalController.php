<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    // create function home
    public function index()
    {
    	return view('frontend.index'); // dia panggil folder frontend dalam resources/views/frontend
    }
}
