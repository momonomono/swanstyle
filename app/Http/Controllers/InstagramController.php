<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function index()
    {
        $data = "Hello World";


        $token = env('INSTAGRAM_TOKEN');
        $id = env('INSTAGRAM_ID');
        $count = 4;

        $baseUrl = 'https://graph.facebook.com/v6.0/' . $id . '?';

        $params = array(
            'fields' => "media.limit(${count}){" . implode(",", array('name', 'permalink', 'media_url', 'thumbnail_url')) . "}",
            'access_token' => $token
        );

        $data = $baseUrl . http_build_query($params);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $baseUrl . http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $responseText = curl_exec($ch);
        $result = json_decode($responseText, true);

        curl_close($ch);

        $data = $result['media']['data'][0]['media_url'];
        $media_data = $result['media']['data'];

        return view('instagram', [
            'data' => $data,
            'media_data' => $media_data
        ]);
    }
}
