<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function forgot_password()
    {
        return view('forgot_password');
    }

    public function blank_page()
    {
        return view('blank_page');
    }

    public function chart()
    {
        return view('chart');
    }

    public function table()
    {
        return view('table');
    }
}
