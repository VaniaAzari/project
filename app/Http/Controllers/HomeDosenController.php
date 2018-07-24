<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\Materi;
use App\Tugas;
use App\Pengumuman;

class HomeDosenController extends Controller
{
     public function hitungdosen()
    {
        $dosen = Dosen::all();
        $dosen = Dosen::paginate(5);
        $hitungmateri = Materi::count();
        $hitungtugas = Tugas::count();
        $pengumuman = Pengumuman::all();
        $hitungpengumuman = Pengumuman::count();

        return view('homedosen.indexdosen',['dosen'=>$dosen,'hitungtugas'=>$hitungtugas,'hitungmateri'=>$hitungmateri,
            'pengumuman'=>$pengumuman,'hitungpengumuman'=>$hitungpengumuman]);    
    }
}
