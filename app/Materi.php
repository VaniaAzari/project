<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
     protected $table ='filetable';

     public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
