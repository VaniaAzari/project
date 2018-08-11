<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
     protected $table ='tugas';

public function dosen()
{
return $this->belongsTo(Dosen::class);
}

public function kelas()
{
return $this->belongsTo(Kelas::class);
}
public function matakuliah()
{
return $this->belongsTo(Matakuliah::class);
}

}
