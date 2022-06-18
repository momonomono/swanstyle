<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Menu;
use App\Http\Requests\FormPostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormMail;

class MainController extends Controller
{
    
    public function top(){
        $test = "";
        $accessToken = env('INSTAGRAM_ACCESS_TOKEN');
        $accessId = env('INSTAGRAM_ID');
        $count = 1;

        $test = $accessToken;

        $baseUrl = "https://graph.facebook.com/v14.0/${accessId}?fields=media.limit(5){media_url}&access_token=${accessToken}";

        $test = $baseUrl;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $baseUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        $responseText = curl_exec($ch);
        $result = json_decode($responseText, true);
    
        // セッション終了
        curl_close($ch);

        $data = [
            'details' => Detail::get(),
            'data' => $result,
            "test" => $test
        ];


        return view("top",$data);
    }

    public function menu(){

        $menus = [
            'menus' => Menu::get()
        ];

        return view('menu',$menus);
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
