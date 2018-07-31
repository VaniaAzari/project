<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatakuliahKelas;
use App\Matakuliah;
use App\Kelas;
use App\Dosen;


class MatakuliahKelasController extends Controller
{
      public function index()
    {
         $matakuliahkelas = MatakuliahKelas::all();
         $matakuliahkelas= MatakuliahKelas::paginate(5);
        return view('matakuliahkelas.index',['matakuliahkelas'=>$matakuliahkelas]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matakuliah = Matakuliah::all(['id', 'nama_matkul']);
        $kelas = Kelas::all(['id', 'nama_kelas']);
        $dosen = Dosen::all(['id', 'nama']);
        return view('matakuliahkelas.form',['action'=>"simpan",'matakuliah'=>$matakuliah,'kelas'=>$kelas,'dosen'=>$dosen]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        $matakuliahkelas = new MatakuliahKelas;
        $matakuliahkelas->id_matkul = $request->id_matkul;
        $matakuliahkelas->id_kelas = $request->id_kelas;
        $matakuliahkelas->dosen_id = $request->dosen_id;
        $matakuliahkelas->save();
        return redirect('/matakuliahkelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $matakuliahkelas = MatakuliahKelas::find($id);
        $matakuliah = Matakuliah::all(['id', 'nama_matkul']);
        $kelas = Kelas::all(['id', 'nama_kelas']);
        $dosen = Dosen::all(['id', 'nama']);
        return view('matakuliahkelas.edit',['action'=>"delete",'matakuliahkelas'=>$matakuliahkelas,'matakuliah'=>$matakuliah,'kelas'=>$kelas,'dosen'=>$dosen]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
           $matakuliahkelas = MatakuliahKelas::find($id);
           $matakuliah = Matakuliah::all(['id', 'nama_matkul']);
       	   $kelas = Kelas::all(['id', 'nama_kelas']);
           $dosen = Dosen::all(['id', 'nama']);

        return view('matakuliahkelas.edit',['action'=>"update",'matakuliahkelas'=>$matakuliahkelas,'matakuliah'=>$matakuliah,'kelas'=>$kelas,'dosen'=>$dosen]);
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
        $matakuliahkelas = MatakuliahKelas::find($id);
        $matakuliahkelas->id_matkul = $request->id_matkul;
        $matakuliahkelas->id_kelas = $request->id_kelas;
        $matakuliahkelas->dosen_id = $request->dosen_id;
        $matakuliahkelas->save();
        return redirect('/matakuliahkelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matakuliahkelas = MatakuliahKelas::find($id);
        $matakuliahkelas->delete();
        return redirect('/matakuliahkelas');
    }
    public function search(Request $request){
        $cari = $request->get('search');
        $matakuliahkelas = MatakuliahKelas::where('id_kelas','LIKE','%'.$cari.'%')->paginate(10);
         return view('matakuliahkelas.index',['action'=>"cari",'matakuliahkelas'=>$matakuliahkelas]);
    }
}
