<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function page()
    {
        //dd('here');
        return view('admin.home');
    }
}
