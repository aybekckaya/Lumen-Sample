<?php
/**
 * Created by PhpStorm.
 * User: aybekcankaya
 * Date: 20/02/16
 * Time: 15:08
 */



namespace App\Http\Controllers;

use App\Country;
use App\City;
use App\Language;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
    public function getCountriesWithLanguage($language)
    {
        $tempCountry = new Country();
        $fill = $tempCountry->getFillable();

        $res = DB::table("Country")->leftJoin("CountryLanguage","CountryLanguage.CountryCode","=","Country.Code")->where("CountryLanguage.Language",$language)->get($fill);

       echo response()->json($res)->getContent();
    }



    public function addLanguage(Request $request)
    {
        $language = Language::create($request->all());

        var_dump($language);
    }


}