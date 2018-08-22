<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function login()
    {
    	return view('backend.account.login');
    }

    public function singin(Request $request)
    {

    }

    public function forgotPassword()
    {
        return view('backend.account.forgotPassword');
    }

    public function sendEmail(Request $request) 
    {
        
    }

    public function logout()
    {

    }
}
