<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CountryController123 extends Controller
{

    public function sayhi()
    {
        $arr = array("succeed");

        response()->json($arr);
    }

}
