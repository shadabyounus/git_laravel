<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController1 extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function About()
    {
        return view('about');
    }
    public function Product()
    {
        return view('product');
    }
}
