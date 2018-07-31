<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatakuliahKelas;
use Auth;

class BahanAjarDosenController extends Controller
{
    public function index()
    {
        $matakuliah = MatakuliahKelas::where('dosen_id', Auth::guard('dosen')->user()->nama)->get();
                
        return view('bahanajardosen.index',['matakuliah'=>$matakuliah]);    }
}
