<?php
/**
 * Created by PhpStorm.
 * User: aybekcankaya
 * Date: 12/02/16
 * Time: 00:36
 */


namespace App;

use Illuminate\Database\Eloquent\Model;


class Country extends Model
{

    protected $table = "Country";
    protected $primaryKey = "Code";

    protected $fillable = ['Code', 'Name' , 'Continent' , 'Region' ,'SurfaceArea' ,'IndepYear' , 'Population' , 'LifeExpectancy' ,'GNP' , 'GNPOld','LocalName' ,'GovernmentForm', 'HeadOfState','Capital'];






}