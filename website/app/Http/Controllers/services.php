<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class services extends Controller
{
    function show()
    {
    $i=0;
    for($i=0;$i<50;$i++){
    return $i.">this is services \n";
    }
    }
}
