<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatakuliahKelas;
use Auth;

class BahanAjarTugasController extends Controller
{
    public function index()
    {
        $matakuliah = MatakuliahKelas::where('id_kelas', Auth::guard('mahasiswa')->user()->id_kls)->get();
                
        return view('bahanajartugas.index',['matakuliah'=>$matakuliah]);    }
}
