<?php

namespace App\Http\Controllers;

use App\Country;
use App\City;
use App\Language;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{


    public function getCodes()
    {

        // Basic SQL
        // https://laravel.com/docs/5.2/database


        $res = app("db")->select("SELECT Code FROM Country");         echo response()->json($res)->getContent();



    }



    public function getCountryByCode($code)
    {

        // Query Builder
        // https://laravel.com/docs/5.2/queries

        $country =DB::table('Country')->where('Code', '=', $code)->get();

        $res = response()->json($country);

        echo $res->getContent();

    }


    public function getCitiesByCountryCode($code)
    {

        // Eloquent
        // https://laravel.com/docs/5.2/eloquent

        $res = City::where('CountryCode',$code)->get();

        $json = response()->json($res)->getContent();
        echo $json;
    }



    public function getCountriesByPopulationConstraints(Request $request)
    {
        $minPop = 0;
        $maxPop = PHP_INT_MAX;

        if($request->has('minPopulation'))
        {
            $minPop = $request->only('minPopulation');
        }


        if($request->has('maxPopulation'))
        {
            $maxPop = $request->only('maxPopulation');
        }

        $res = Country::where('Population','>=' ,$minPop)->where('Population' , '<=' , $maxPop)->get();

        echo response()->json($res)->getContent();

    }



    public function languagesSpokenByCountryCode($code)
    {
        $res = Language::where("CountryCode",$code)->get();

        echo response()->json($res)->getContent();
    }



}