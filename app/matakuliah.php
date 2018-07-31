<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table ='matakuliah';

    public function postsmateri() 
	{ 
		return $this->hasMany('App\Materi'); 
	}
}
