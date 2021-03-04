<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

class storedatabase extends Controller
{
    function admin(){
    #$users = DB::table('store')->get();
    $users = DB::table('store')
                ->orderBy('productid', 'desc')
                ->get();
     foreach ($users as $title) {
    echo $title->productid."\n\n,";
}
    
    #return DB::select("select * from store"); #this command for Raw sql database connection
    }
    
    function addproduct(){
    
   
    return view('addproduct');
    #return DB::select("select * from store"); #this command for Raw sql database connection
    }
    
    function insertdb(Request $product_data){
    
    $id=DB::select("SHOW TABLE STATUS LIKE 'store'");
    $next_id=$id[0]->Auto_increment;
    
    
    if($product_data->hasFile('image')){

    $all_detail_of_image=$product_data->file('image');
    $filename=$next_id.".".$all_detail_of_image->extension(); 
    $path = Storage::putFileAs(
            '/public', $all_detail_of_image, $filename
     );
    $data['image']=$filename;
    }  
    
    $alldata=$product_data->input();
    $alldata['image']=$filename;
    
    $productname=$product_data->input('productitem');
    
    $catogery=$product_data->input('catogery');
    
    $subcatogery=$product_data->input('subcatogery');
    
    $subsubcatogery=$product_data->input('subsubcatogery');
    
    $warehouse=$product_data->input('warehouse');
    
    $rate=$product_data->input('rate');
    
    $content=$product_data->input('content');
    
    $brand=$product_data->input('brand');
    
    $other=$product_data->input('other');
    
    $store_mobile_number=$product_data->input('store_mobile_number');    
    
    $quantity=$product_data->input('quantity');
    
    $image=$filename;
    
    DB::table('store')->insert([
    'itemname' => $productname,
    'catogery' => $catogery,
    'subcatogery' => $subcatogery,
    'subsubcatogery'=> $subsubcatogery,
    'price'    => $rate,
    'describe' => $content,
    'quantity'  => $quantity,
    'storename' => $warehouse,
    'image'  => "/storage/".$image,
    'store_mobile_number' => $store_mobile_number,
    'brand' => $brand
    
    ]);
    
    
    return view('addproduct',['inputdata'=>$alldata]);
    //['productname'=>$productname,'catogery'=>$catogery,'subcatogery'=>$subcatogery,'rate'=>$rate,'content'=>$content,'quality'=>$quality,'warehouse'=>$warehouse,'brand'=>$brand]);
    
    
    }
    
}
