<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Matakuliah;
use App\Materi;
use App\Tugas;
use App\Pengumuman;

class HomeMahasiswaController extends Controller
{
    public function hitungmahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        $mahasiswa = Mahasiswa::paginate(5);
        $hitungmatakuliah = Matakuliah::count();
        $hitungmateri = Materi::count();
        $hitungtugas = Tugas::count();
        $pengumuman = Pengumuman::all();
        return view('homemahasiswa.indexmahasiswa',['mahasiswa'=>$mahasiswa,'hitungtugas'=>$hitungtugas,'hitungmateri'=>$hitungmateri,
            'hitungmatakuliah'=>$hitungmatakuliah,'pengumuman'=>$pengumuman]);    
    }
}
