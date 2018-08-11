<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\Mahasiswa;
use Auth;

class ProfilController extends Controller
{
    public function profileDosen(){
    	 $dosen = Dosen::where('nama', Auth::guard('dosen')->user()->nama)->get();
    	 return view('profile.indexdosen',['dosen'=>$dosen]);
    }
    public function profileMhs(){
    	$mhs = Mahasiswa::where('nama', Auth::guard('mahasiswa')->user()->nama)->get();
    	return view('profile.indexmhs',['mhs'=>$mhs]);
    }
}
