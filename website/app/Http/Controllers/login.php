<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function htmlview()
    {
        return view('login');
    }
    
    public function signupdata(Request $request)
    {
    $all=$request->all();
    print_r($all);
    $email = $request->input('email');
    echo "\n";
    echo $email;
    
    }
    
    public function logindata(Request $request)
    {
    $all=$request->all();
    print_r($all);
    $name = $request->input('name');
    
    }
    
    
}
