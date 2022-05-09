<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function top(){

        return view("top");
    }

    public function menu(){

        return view('menu');
    }

    public function contact(){

        return view('contact');
    }

    public function access(){

        return view('access');
    }

    public function news(){

        return view('news');
    }
}
