<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    // create function index
    /*public function index() 
    {
    	return view('frontend.index');
    }*/

    public function login() 
    {
    	return view('frontend.login');
    }

    public function register() 
    {
        return view('frontend.register');
    }

    public function registerPost(Request $request)  // Request =  class name
    {
    	$request->validate([
            'name' => 'required', 
            'email' => 'required|email|unique:users', 
            'ic' => 'required|unique:users',
            'password' => 'required'
        ], [
            'name.required' => 'Sila masukkan nama',
            'email.email' => 'Email tidak sah',
            'email.unique' => 'Email telah wujud'
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->ic = $request->ic;
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with('success', 'dah register');
    }

    public function loginPost(Request $request)  // Request =  class name
    {
        $request->validate([
             
            'email' => 'required|email', 
            'password' => 'required'
        ], [
            'email.required' => 'Sila masukkan email',
            'password.required' => 'Sila masukkan katalaluan',
            
        ]);
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)){
            return redirect()->route('user.dashboard');
        }
        else {
            return back()->withError('Login Failed');
        }

    }


    public function dashboard(){
        return view('backend.index');
    }
    public function logout(){
        Auth::logout();

        return redirect()->route('index')->withSuccess('Logout Success');
    }

    /*public function home() 
    {
    	return view('frontend.index');
    }*/
}
