<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
    	$title = 'Thành viên';
    	return view('backend.user.index', compact('title'));
    }
}
