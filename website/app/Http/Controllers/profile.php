<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    function show()
    {
    $i=0;
    for($i=0;$i<50;$i++){
    echo $i.">this is Profile \n";
    }
    }
}
