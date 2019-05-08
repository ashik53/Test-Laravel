<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
   	public function __construct(){

   		$this->middleware('guest:admin');

   	}//function

    public function showLoginForm(){
    	return view('auth.admin-login');
    }//

    public function login(){
    	
    	$this->validate($request, [

    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	]);

    	//Attempt the log the user in
    	Auth::attempt($credentials, $remember);

    	//if successful, the redirect to their intended location

    	//if unsuccessful , then redirect back to the login with the form data

    	return true;
    }//
}//class
