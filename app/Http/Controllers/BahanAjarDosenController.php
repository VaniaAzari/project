<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatakuliahKelas;
use Auth;

class BahanAjarDosenController extends Controller
{
    public function index()
    {
        $matakuliahkelas = MatakuliahKelas::where('dosen_id', Auth::guard('dosen')->user()->id)->get();
                
        return view('bahanajardosen.index',['matakuliahkelas'=>$matakuliahkelas]);    }
}
