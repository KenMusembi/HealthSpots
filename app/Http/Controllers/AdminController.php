<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function get_admin(Request $request)
    {
        return view('admin');
    }
}
