<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table ='matakuliah';

public function matakuliahkelas()
{
   return $this->hasMany(MatakuliahKelas::class);
}
public function materi()
{
   return $this->hasMany(Materi::class);
}
public function tugas()
{
   return $this->hasMany(Tugas::class);
}
public function tugasmahasiswa()
{
	return $this->hasMany(TugasMhs::class);
}
public function groupKuis()
{
    return $this->hasMany(GroupKuis::class);
}


}
