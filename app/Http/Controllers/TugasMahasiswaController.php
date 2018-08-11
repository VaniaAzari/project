<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TugasMhs;
use App\Tugas;
use Auth;
use App\Http\Requests\FormRequestTugasMhsStore;

class TugasMahasiswaController extends Controller
{
        public function index($matakuliah_id)
    {
        $tugasmahasiswa = Tugas::orderBy('matakuliah_id')
        ->where('matakuliah_id','=',$matakuliah_id)
        ->where('kelas_id', Auth::guard('mahasiswa')->user()->kelas_id)
        ->get();
        
        return view('tugasmahasiswa.index',['tugasmahasiswa'=>$tugasmahasiswa]);

        

   }
        public function show($id)
    {

        $tugasmahasiswa = Tugas::find($id);
        
        return view('tugasmahasiswa.edit',['action'=>"delete",'tugasmahasiswa'=>$tugasmahasiswa]);
    }

        public function edit($id)
    {
        $tugasmahasiswa = Tugas::find($id);
        return view('tugasmahasiswa.edit',['action'=>"update",'tugasmahasiswa'=>$tugasmahasiswa]);
    }


       public function detail($id,$tanggal_masuk,$matakuliah_id,$id_kelas)
    {
        $tugasmahasiswa = Tugas::find($id);
        $tugasmahasiswa2 = TugasMhs::orderBy('tanggal_masuk','matakuliah_id','kelas_id')
        ->where('tanggal_masuk','=',$tanggal_masuk)
        ->where('matakuliah_id','=',$matakuliah_id)
        ->where('kelas_id','=',$id_kelas)
        ->where('mahasiswa_id', Auth::guard('mahasiswa')->user()->id)->get();        
       
        return view('tugasmahasiswa.detail',['action'=>"update",'tugasmahasiswa'=>$tugasmahasiswa,'tugasmahasiswa2'=>$tugasmahasiswa2]);
    }

        public function update(FormRequestTugasMhsStore $request, $id)
    {
        $tugasmahasiswa = Tugas::find($id);
        $tugasmahasiswa = new TugasMhs;
        $tugasmahasiswa->mahasiswa_id = Auth::guard('mahasiswa')->user()->id;
        $tugasmahasiswa->kelas_id = $request->kelas_id;
        $tugasmahasiswa->matakuliah_id = $request->matakuliah_id;
        $file_name = $request->file('file_name');
        $ext = $file_name->getClientOriginalName();
        $newName = $ext;
        $file_name->move('upload/files',$newName);
        $tugasmahasiswa->file_name = $newName;
        $tugasmahasiswa->tanggal_masuk = $request->tanggal_masuk;
        $tugasmahasiswa->save();
        return redirect('/bahanajartugas')->with(['success' => 'Upload tugas berhasil']);
    }
    
}
