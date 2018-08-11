<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\Materi;
use App\Tugas;
use App\Pengumuman;
use Auth;

class HomeDosenController extends Controller
{
     public function hitungdosen()
    {
        $dosen = Dosen::all();
        $dosen = Dosen::paginate(5);
        $hitungmateri = Materi::where('dosen_id', Auth::guard('dosen')->user()->id)->count();
        $hitungtugas = Tugas::where('dosen_id', Auth::guard('dosen')->user()->id)->count();
        $pengumuman = Pengumuman::all();
        $hitungpengumuman = Pengumuman::where('dosen_id', Auth::guard('dosen')->user()->id)->count();
        

        return view('homedosen.indexdosen',['dosen'=>$dosen,'hitungtugas'=>$hitungtugas,'hitungmateri'=>$hitungmateri,
            'pengumuman'=>$pengumuman,'hitungpengumuman'=>$hitungpengumuman]);    
    }
}
