<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login_dosen extends Authenticatable
{
   protected $table = 'dosen';
}
