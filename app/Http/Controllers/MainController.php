<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Http\Requests\FormPostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormMail;

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

    public function postContact(FormPostRequest $request){

        $name = $request->input('name');
        $furigana = $request->input('furigana');
        $mail = $request->input('mail');
        $phone_number = $request->input('phone_number');
        $message = $request->input('message');

        Mail::to('swantile-hp@nittoseitosho.co.jp')
            ->send(new FormMail($name,$furigana,$mail,$phone_number,$message));
            
        return view('contact');
    }

    public function news(){

        return view('news');
    }
}
