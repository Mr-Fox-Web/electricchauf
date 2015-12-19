<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $fillable = array('name', 'civility', 'email','address','zipcode','city'
   	,'phone','gsm','language');
   protected $table = 'customers';
   public $timestamps = false;
}
 