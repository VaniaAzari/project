<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Prodi;
use App\Kelas;

class MahasiswaController extends Controller
{
     public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $mahasiswa = Mahasiswa::paginate(5);
       

        // return view('mahasiswa.index',['mahasiswa'=>$mahasiswa]);
         return view('mahasiswa.index', compact('mahasiswa'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Kelas::all(['id', 'nama_kelas']);
        $prodi = Prodi::all(['id', 'nama_prodi']);
        return view('mahasiswa.form',['action'=>"simpan",'items'=>$items,'prodi'=>$prodi]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->username = $request->username;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->id_prodi = $request->id_prodi;
        $mahasiswa->id_kls = $request->id_kls;
        $mahasiswa->password = $request->password;
        $mahasiswa->save();
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $items = Kelas::all(['id', 'nama_kelas']);
        $prodi = Prodi::all(['id', 'nama_prodi']);
        return view('mahasiswa.edit',['action'=>"delete",'mahasiswa'=>$mahasiswa,'items'=>$items,'prodi'=>$prodi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $items = Kelas::all(['id', 'nama_kelas']);
        $prodi = Prodi::all(['id', 'nama_prodi']);
        return view('mahasiswa.edit',['action'=>"update",'mahasiswa'=>$mahasiswa,'items'=>$items,'prodi'=>$prodi]);
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
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->username = $request->username;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->id_prodi = $request->id_prodi;
        $mahasiswa->id_kls = $request->id_kls;
        $mahasiswa->password = $request->password;
        $mahasiswa->save();
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }

 public function search(Request $request){
        $cari = $request->get('search');
        $mahasiswa = Mahasiswa::where('nama','LIKE','%'.$cari.'%')->paginate(10);
         return view('mahasiswa.index',['action'=>"cari",'mahasiswa'=>$mahasiswa]);
    }

}
