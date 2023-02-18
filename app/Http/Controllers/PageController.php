<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function register(){
        // if(Auth::check()){
        //     return redirect('/report');
        // }
        return view('auth.register');
    }
}
