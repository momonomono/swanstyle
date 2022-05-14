<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    
    public function top(){

        $details = [
            'details' => Detail::get()
        ];

        return view("top",$details);
    }

    public function menu(){

        return view('menu');
    }

    public function contact(){

        return view('contact');
    }

    public function access(){

        $details = Detail::all();

        return view('access',[
            'details' => $details
        ]);
    }

    public function news(){

        return view('news');
    }
}
