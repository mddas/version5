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
            $data='';
            $term = $request->terms;
            if(strlen($term)>=2){
            $data = DB::table('store')->where("itemname","LIKE","%$term%")->orwhere("catogery","LIKE","%$term%")->orwhere("describe","LIKE","%$term%")->get();
            }
             foreach ($data as $dat) {
             
             echo "<a class='list-group-item list-group-item-ation border-1'>".$dat->itemname."</a>";
             }
        }
    }
    
}
