<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function cubaan ()
    {
        return view('test');
    }

    public function welcome ()
    {
        return view('welcome');
    }

    public function backend ()
    {
        return view('layouts.backend');
    }

    public function dashboard ()
    {
        return view('dashboard');
    }
}
