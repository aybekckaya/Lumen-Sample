<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {

    return $app->version();
});






/*
 *
 *
 * country/codes -> all country codes  (GET)
country/{codeString} -> country by code  (GET)
country/{codeString}/cities -> return all cities by country (GET)
country/population (minPopulation , maxPopulation) ->  return array of countries which satisfies min <= pop <= max (POST)

city -> all cities (GET)
city/{id(Int)} -> city by ID
city/{cityName(String)} -> city by cityName


country/{countryCode}/language -> all Languages that are spoken in given country

language/{languageString}/country -> all Countries that speak given language



 * */


// returns all country codes
$app->get('/country/codes', 'CountryController@getCodes');


$app->get('/country/{codeString}' ,'CountryController@getCountryByCode');


$app->get('/country/{codeString}/cities','CountryController@getCitiesByCountryCode');

$app->post('/country/population' , 'CountryController@getCountriesByPopulationConstraints');


$app->get('country/{countryCode}/language' ,"CountryController@languagesSpokenByCountryCode" );


$app->get('/city','CityController@allCities');

$app->get('/city/{ID}','CityController@cityByID');

$app->get('/city/name/{cityName}' ,'CityController@cityByName' );



$app->get('/language/{language}/country' ,"LanguageController@getCountriesWithLanguage");


$app->post('/city/new' , "CityController@addCity");


$app->post('/city/{cityID}/update' , "CityController@updateCity");


$app->delete('/city/{cityID}/delete' , "CityController@removeCity");