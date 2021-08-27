<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HpController extends Controller
{
    //
    public function confirm(Request $request){
        $name = $request->name;
         
        return view('confirm',compact("name"));
    }
}
