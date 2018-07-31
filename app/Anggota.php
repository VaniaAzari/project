<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table ='matakuliahs';

    public function panggildataHobi(){
    	return $this->hasMany('App\Hobi');
    }
}
