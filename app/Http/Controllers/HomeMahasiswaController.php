<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\MatakuliahKelas;
use App\Materi;
use App\TugasMhs;
use App\Pengumuman;
use Auth;

class HomeMahasiswaController extends Controller
{
    public function hitungmahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        $mahasiswa = Mahasiswa::paginate(5);
        $hitungmatakuliah = MatakuliahKelas::where('kelas_id', Auth::guard('mahasiswa')->user()->kelas_id)->count();
        $hitungmateri = Materi::where('kelas_id', Auth::guard('mahasiswa')->user()->kelas_id)->count();
        $hitungtugas = TugasMhs::where('mahasiswa_id', Auth::guard('mahasiswa')->user()->id)->count();
        $pengumuman = Pengumuman::all();
        return view('homemahasiswa.indexmahasiswa',['mahasiswa'=>$mahasiswa,'hitungtugas'=>$hitungtugas,'hitungmateri'=>$hitungmateri,
            'hitungmatakuliah'=>$hitungmatakuliah,'pengumuman'=>$pengumuman]);    
    }
}
