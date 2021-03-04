<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class search extends Controller
{
    function search(Request $search){
    
    $search=$search->input('search');
    
    $alldat = $user = DB::table('store')->where('productid', $search)->first();
     
    return view('addproduct',['alldata'=>$alldat]);
    }
    
    public function suggestion(Request $request){
        
        if($request->ajax()) {
            
            $term = $request->terms;
          
            $data = DB::table('store')->where("itemname","LIKE","%$term%")->get();
            
             foreach ($data as $dat) {
             echo $dat->itemname."\n\n,";
             }
        }
    }
    
    
    
}
