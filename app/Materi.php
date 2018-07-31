<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
     protected $table ='filetable';

     public function bahanajar() 
		{ 
			return $this->belongsTo('App\Matakuliah'); 
		} 
}
