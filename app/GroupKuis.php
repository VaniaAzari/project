<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupKuis extends Model
{
    protected $table ='group_kuis';

    protected $fillable = [
        'name', 'id_kelas', 'id_matakuliah'
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
}
