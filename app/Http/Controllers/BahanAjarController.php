<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatakuliahKelas;
use Auth;

class BahanAjarController extends Controller
{
      public function index()
    {
        $matakuliahkelas = MatakuliahKelas::where('kelas_id', Auth::guard('mahasiswa')->user()->kelas_id)->get();
                
        return view('bahanajar.index',['matakuliahkelas'=>$matakuliahkelas]);    }
}
