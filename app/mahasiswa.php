<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table ='mahasiswa';

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
	public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    

}
