<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wrapper extends Controller
{
    public function districts(Request $request){
        $key = $request->access_key;
        $quer = $request->query;

        $json= Http::get('http://api.weatherstack.com/current?access_key='.$key.'&query='.$quer)->json();

        return response()->json($json);
    }

    public function current(Request $request){
        $key = $request->access_key;
        $quer = $request->query;

        $json= Http::get('http://api.weatherstack.com/current?access_key='.$key.'&query='.$quer)->json();

        return response()->json($json);
    }

    public function current2(Request $request){
        $key = $request->access_key;
        $quer = $request->query;

        $json= Http::get('http://api.weatherstack.com/current?access_key='.$key.'&query='.$quer)->json();

        return response()->json($json);
    }

    public function current3(Request $request){
        $key = $request->access_key;

        $json= Http::get('http://api.weatherstack.com/current?access_key='.$key)->json();

        return response()->json($json);
    }

    public function current4(Request $request){
        $key = $request->access_key;
        $quer = $request->query;

        $json= Http::get('http://api.weatherstack.com/current?access_key='.$key.'&query='.$quer)->json();

        return response()->json($json);
    }
}
