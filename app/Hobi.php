<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
     protected $table ='hobi';

     public function panggildataAnggota (){
     	return $this->belongsTo('App\Anggota');
     }
}
