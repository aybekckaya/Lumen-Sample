<?php
/**
 * Created by PhpStorm.
 * User: aybekcankaya
 * Date: 20/02/16
 * Time: 13:49
 */



namespace App\Http\Controllers;

use App\Country;
use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CityController extends Controller
{

     public function allCities()
     {
         $res = City::all();
         echo response()->json($res)->getContent();
     }


      public function cityByID($ID)
      {
          $res = City::find($ID);
          echo response()->json($res)->getContent();
      }


       public function cityByName($name)
       {
           $res = City::where('Name', $name)->get();
           echo response()->json($res)->getContent();
       }



       public function addCity(Request $request)
       {

           $city  = City::create($request->all());

           echo response()->json($city)->getContent();
       }

       public function updateCity(Request $request , $id)
       {
           $city = City::find($id);


           //var_dump($request);

           $city->Name = $request->input("Name");

           $city->save();

           echo response()->json($city)->getContent();
       }

    public function removeCity($cityID)
    {
        $res = City::destroy([$cityID]);
        echo response()->json($res)->getContent();
    }

}