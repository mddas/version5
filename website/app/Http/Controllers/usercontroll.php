<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroll extends Controller
{
    function show()
    {
    $i=0;
    for($i=0;$i<500;$i++){
    return $i.",";
    }
    }
    
}
