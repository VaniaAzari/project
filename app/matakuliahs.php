<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliahs extends Model
{
    protected $table ='matakuliahs';

    public function panggildataMateris() {
    	return $this->hasMany('App\materis');
    }
}
