<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
	protected $table ='pengumuman';

	public function user() 
		{ 
			return $this->belongsTo('App\login_dosen'); 
		} 

}
