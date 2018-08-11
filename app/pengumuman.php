<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
	protected $table ='pengumuman';

	public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
