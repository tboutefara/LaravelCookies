<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class MyController extends Controller
{
    public function subscribe(Request $request){
        $name = $request->input('name');
        $cookie = Cookie::make('name', $name, 120);
        return response()->view('setcookie')->withCookie($cookie);
    }

    public function unsubscribe(){
        $cookie = Cookie::forget('name');
        return response()->view('setcookie')->withCookie($cookie);
    }

    public function index(){
        return view('index');
    }

}
