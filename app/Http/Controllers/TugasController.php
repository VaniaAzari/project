<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tugas;
use App\Kelas;
use App\Matakuliah;
use App\TugasMhs;
use Auth;

class TugasController extends Controller
{
      public function index($id_matkul,$id_kelas)
    {
        $tugas = Tugas::orderBy('id_matkul','id_kelas')
        ->where('id_matkul','=',$id_matkul)
        ->where('id_kelas','=',$id_kelas)
        ->where('user_id', Auth::guard('dosen')->user()->id)
        ->get();
       
        return view('tugas.index',['tugas'=>$tugas]);
    }

   public function detail($id,$id_matkul,$id_kelas,$tanggal_masuk)
    {
        $tugas = Tugas::find($id);
        $tugasmahasiswa = TugasMhs::orderBy('tanggal_masuk','matakuliah_id','kelas_id')
        ->where('tanggal_masuk','=',$tanggal_masuk)
        ->where('matakuliah_id','=',$id_matkul)
        ->where('kelas_id','=',$id_kelas)
        ->get();     

        return view('tugas.detail',['action'=>"update",'tugas'=>$tugas,'tugasmahasiswa'=>$tugasmahasiswa]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = Matakuliah::all(['id', 'nama_matkul']);
        $items = Kelas::all(['id', 'nama_kelas']);
        return view('tugas.form',['action'=>"simpan",'item'=>$item,'items'=>$items]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        $tugas = new Tugas;
        $tugas->id_matkul = $request->id_matkul;
        $tugas->id_kelas = $request->id_kelas;
        $tugas->konten = $request->konten;
        $tugas->tanggal_masuk = $request->tanggal_masuk;
        $tugas->tanggal_akhir = $request->tanggal_akhir;
        $tugas->user_id =  Auth::guard('dosen')->id(); 
        $tugas->save();
        return redirect('/bahanajartugasdosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_matkul,$id_kelas)
    {
        $tugas = Tugas::find($id);
        $item = Matakuliah::all(['id', 'nama_matkul']);
        $items = Kelas::all(['id', 'nama_kelas']);
        return view('tugas.edit',['action'=>"delete",'tugas'=>$tugas,'item'=>$item,'items'=>$items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tugas = Tugas::find($id);
        $item = Matakuliah::all(['id', 'nama_matkul']);
        $items = Kelas::all(['id', 'nama_kelas']);
        return view('tugas.edit',['action'=>"update",'tugas'=>$tugas,'item'=>$item,'items'=>$items]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tugas = Tugas::find($id);
        $tugas->id_matkul = $request->id_matkul;
        $tugas->id_kelas = $request->id_kelas;
        $tugas->konten = $request->konten;
        $tugas->tanggal_masuk = $request->tanggal_masuk;
        $tugas->tanggal_akhir = $request->tanggal_akhir;
        $tugas->save();
        return redirect('/bahanajartugasdosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tugas = Tugas::find($id);
        $tugas->delete();
        return redirect('/bahanajartugasdosen');
    }

    public function search(Request $request){
        $cari = $request->get('search');
        $tugas = Tugas::where('id_matkul','LIKE','%'.$cari.'%')->paginate(10);
        return view('tugas.index',['action'=>"cari",'tugas'=>$tugas]);
    }

     
}
