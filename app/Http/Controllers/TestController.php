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

    public function master ()
    {
        return view('layouts.app');
    }

    public function child ()
    {
        return view('child');
    }

    public function child2 ()
    {
        return view('child2');
    }
}
