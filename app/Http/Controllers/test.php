<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class test extends Controller
{
    function index(Request $request){
        dd(Auth::id());
    }
}
