<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    // create function home
    public function home()
    {
    	return view('frontend.index'); // dia panggil folder frontend dalam resources/views/frontend
    }
}
