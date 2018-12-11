<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthenticationController extends Controller
{
    public function getLogin()
	{
	    return view('login');
	}
	
	public function getSocialRedirect($account)
	{
	    try {
	        return Socialite::with($account)->redirect();
	    } catch (\InvalidArgumentException $e) {
	        return redirect('/login');
	    }
	}
}