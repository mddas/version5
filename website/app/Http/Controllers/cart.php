<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class cart extends Controller
{
    function search(Request $allget){
    
    $productid=$allget['productid'];
    
    $an_data = $user = DB::table('store')->where('productid', $productid)->first();
    
    $alldata = DB::table('store')->get();
     
    return view('cart',['an_data'=>$an_data,'alldata'=>$alldata]);
    }
}
