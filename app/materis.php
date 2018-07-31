<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materis extends Model
{
       protected $table ='materis';

     public function panggildataMatakuliahs (){
     	return $this->belongsTo('App\Matakuliahs');
     }
}
