<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // create function index
    public function index() 
    {
    	return 'Hello world';
    }

    public function login() 
    {
    	return view('frontend.login');
    }

    public function register() 
    {
    	return view('frontend.register');
    }

    public function home() 
    {
    	return view('frontend.index');
    }
}
