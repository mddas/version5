<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class main extends Controller
{
    function fromdatabase(){
     $alldata = DB::table('store')->get();     
     return view('main', ['alldata' => $alldata]);
    
    }
}
