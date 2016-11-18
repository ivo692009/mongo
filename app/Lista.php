<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Lista extends Eloquent {
	
         protected $connection = 'mongodb';
	 protected $collection = 'personas';
	
         protected $fillable=[
            'nombre',
            'edad'
         ];
         public $timestamps = false;
         
}
