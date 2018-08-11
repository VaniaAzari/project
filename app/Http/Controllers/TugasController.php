<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tugas;
use App\Kelas;
use App\Matakuliah;
use App\MatakuliahKelas;
use App\TugasMhs;
use Auth;
use App\Http\Requests\FormRequestTugasStore;

class TugasController extends Controller
{
      public function index($matakuliah_id,$kelas_id)
    {
        $tugas = Tugas::orderBy('matakuliah_id','kelas_id')
        ->where('matakuliah_id','=',$matakuliah_id)
        ->where('kelas_id','=',$kelas_id)
        ->where('dosen_id', Auth::guard('dosen')->user()->id)
        ->get();

         $matakuliahkelas = MatakuliahKelas::orderBy('matakuliah_id','kelas_id')
            ->where('matakuliah_id','=',$matakuliah_id)
            ->where('kelas_id','=',$kelas_id)
            ->get();
       
        return view('tugas.index',['tugas'=>$tugas,'matakuliahkelas'=>$matakuliahkelas]);
    }

   public function detail($id,$matakuliah_id,$kelas_id,$tanggal_masuk)
    {
        $tugas = Tugas::find($id);
        $tugasmahasiswa = TugasMhs::orderBy('tanggal_masuk','matakuliah_id','kelas_id')
        ->where('tanggal_masuk','=',$tanggal_masuk)
        ->where('matakuliah_id','=',$matakuliah_id)
        ->where('kelas_id','=',$kelas_id)
        ->get();     

        return view('tugas.detail',['action'=>"update",'tugas'=>$tugas,'tugasmahasiswa'=>$tugasmahasiswa]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($matakuliah_id,$kelas_id)
    {
          $matakuliahkelas = MatakuliahKelas::orderBy('matakuliah_id','kelas_id')
            ->where('matakuliah_id','=',$matakuliah_id)
            ->where('kelas_id','=',$kelas_id)
            ->get();
        return view('tugas.form',['action'=>"simpan",'matakuliahkelas'=>$matakuliahkelas]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(FormRequestTugasStore $request)
    {
        $tugas = new Tugas;
        $tugas->matakuliah_id = $request->matakuliah_id;
        $tugas->kelas_id = $request->kelas_id;
        $tugas->konten = $request->konten;
        $file_name = $request->file('file_name');
        $ext = $file_name->getClientOriginalName();
        $newName = $ext;
        $file_name->move('uploads/tugas',$newName);
        $tugas->file_name = $newName;
        $tugas->tanggal_masuk = $request->tanggal_masuk;
        $tugas->tanggal_akhir = $request->tanggal_akhir;
        $tugas->dosen_id =  Auth::guard('dosen')->user()->id; 
        $tugas->save();
        return redirect('/bahanajartugasdosen')->with(['success' => 'Data tugas berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$matakuliah_id,$kelas_id)
    {
        $tugas = Tugas::find($id);       
        return view('tugas.edit',['action'=>"delete",'tugas'=>$tugas]);
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
        return view('tugas.edit',['action'=>"update",'tugas'=>$tugas]);
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
        $tugas->konten = $request->konten;
        if (empty($request->file('file_name'))){
            $tugas->file_name = $tugas->file_name;
        }
        else{
            unlink('uploads/tugas/'.$tugas->file_name); //menghapus file lama
            $file_name = $request->file('file_name');
            $ext = $file_name->getClientOriginalName();
            $newName = $ext;
            $file_name->move('uploads/tugas',$newName);
            $tugas->file_name = $newName;
        }
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
        $tugas = Tugas::where('matakuliah_id','LIKE','%'.$cari.'%')->paginate(10);
        return view('tugas.index',['action'=>"cari",'tugas'=>$tugas]);
    }

     
}
