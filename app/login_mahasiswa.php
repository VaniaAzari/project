<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login_mahasiswa extends Authenticatable
{
   protected $table = 'mahasiswa';

public function tugasmahasiswa()
{
return $this->hasMany(TugasMhs::class);
}

}
