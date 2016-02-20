<?php
/**
 * Created by PhpStorm.
 * User: aybekcankaya
 * Date: 20/02/16
 * Time: 13:39
 */



namespace App;

use Illuminate\Database\Eloquent\Model;


class City extends Model
{

    protected $table = "City";
    protected $primaryKey = "ID";

    protected $fillable = ['ID' , 'Name' , 'CountryCode' ,'Population' , 'District'];


    public $timestamps = false;




}