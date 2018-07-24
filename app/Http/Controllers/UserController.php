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
    	return 'Login';
    }

    public function register() 
    {
    	return 'register';
    }
}
