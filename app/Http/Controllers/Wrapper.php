<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wrapper extends Controller
{
    public function districts(){
        $json= Http::get('http://api.weatherstack.com/current?access_key=ca37374410ef2f88b56c6c32c48fb115&query=New York')->json();

        return response()->json($json);
    }
}
