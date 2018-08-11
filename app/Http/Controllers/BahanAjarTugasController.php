<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatakuliahKelas;
use Auth;

class BahanAjarTugasController extends Controller
{
    public function index()
    {
        $matakuliahkelas = MatakuliahKelas::where('kelas_id', Auth::guard('mahasiswa')->user()->kelas_id)->get();
                
        return view('bahanajartugas.index',['matakuliahkelas'=>$matakuliahkelas]);    }
}
