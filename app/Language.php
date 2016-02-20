<?php
/**
 * Created by PhpStorm.
 * User: aybekcankaya
 * Date: 20/02/16
 * Time: 15:10
 */



namespace App;

use Illuminate\Database\Eloquent\Model;


class Language extends Model
{

    protected $table = "CountryLanguage";
   // protected $primaryKey = "Language";

    protected $fillable = ['CountryCode' , 'Language' , 'IsOfficial' ,'Percentage'];

    public $timestamps = false;




}