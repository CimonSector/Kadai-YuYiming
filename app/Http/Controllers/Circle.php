<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Circle extends Controller
{
    

    function CircleA(Request $request){
        define("a",3.14);
        $num = $request->input('number'); 
        return a * ($num*$num);

    }
}
