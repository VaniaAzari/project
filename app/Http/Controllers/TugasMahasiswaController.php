<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tugas;
use App\Matakuliah;
use App\Kelas;
use Auth;

class TugasMahasiswaController extends Controller
{
     public function index()
    {
        // $tugasmahasiswa = Tugas::all();
        $tugasmahasiswa = Tugas::where('id_kelas', Auth::guard('mahasiswa')->user()->id_kls)->get();
          // $tugasmahasiswa = Auth::guard('mahasiswa')->user()->id;
        return view('tugasmahasiswa.index',['tugasmahasiswa'=>$tugasmahasiswa]);
    }

     public function show($id)
    {

        $tugasmahasiswa = Tugas::find($id);
        
        return view('tugasmahasiswa.edit',['action'=>"delete",'tugasmahasiswa'=>$tugasmahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tugasmahasiswa = Tugas::find($id);
        return view('tugasmahasiswa.edit',['action'=>"kirim",'tugasmahasiswa'=>$tugasmahasiswa]);
    }
       public function detail($id)
    {
        $tugasmahasiswa = Tugas::find($id);
        return view('tugasmahasiswa.detail',['action'=>"kirim",'tugasmahasiswa'=>$tugasmahasiswa,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kirim(Request $request, $id)
    {
        $tugasmahasiswa = Tugas::find($id);
        $tugasmahasiswa->file = $request->file;
        $tugasmahasiswa->save();
        return redirect('/tugasmahasiswa');
    }
    
}
