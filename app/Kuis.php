<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    protected $table ='kuis';

    protected $fillable = [
        'pertanyaan', 'group_kuis_id'
    ];

    public function kuisJawaban()
    {
        return $this->hasMany('App\KuisJawaban','kuis_id');
    }
}
