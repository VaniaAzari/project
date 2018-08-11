<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Prodi;
use App\Kelas;
use App\Http\Requests\FormRequestMhsStore;

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
        $kelas = Kelas::all(['id', 'nama_kelas']);
        $prodi = Prodi::all(['id', 'nama_prodi']);
        return view('mahasiswa.form',['action'=>"simpan",'kelas'=>$kelas,'prodi'=>$prodi]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(FormRequestMhsStore $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->username = $request->username;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->kelas_id = $request->kelas_id;
        $mahasiswa->password = $request->password;
         $file_name = $request->file('file_name');
        $ext = $file_name->getClientOriginalName();
        $newName = $ext;
        $file_name->move('uploads/gambar',$newName);
        $mahasiswa->file_name = $newName;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with(['success' => 'Data mahasiswa berhasil ditambahkan']);
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
        $kelas = Kelas::all(['id', 'nama_kelas']);
        $prodi = Prodi::all(['id', 'nama_prodi']);
        return view('mahasiswa.edit',['action'=>"delete",'mahasiswa'=>$mahasiswa,'kelas'=>$kelas,'prodi'=>$prodi]);
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
        $kelas = Kelas::all(['id', 'nama_kelas']);
        $prodi = Prodi::all(['id', 'nama_prodi']);
        return view('mahasiswa.edit',['action'=>"update",'mahasiswa'=>$mahasiswa,'kelas'=>$kelas,'prodi'=>$prodi]);
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
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->kelas_id = $request->kelas_id;
        $mahasiswa->password = $request->password;
        if (empty($request->file('file_name'))){
            $mahasiswa->file_name = $mahasiswa->file_name;
        }
        else{
            unlink('uploads/gambar/'.$mahasiswa->file_name); //menghapus file lama
            $file_name = $request->file('file_name');
            $ext = $file_name->getClientOriginalName();
            $newName = $ext;
            $file_name->move('uploads/gambar',$newName);
            $mahasiswa->file_name = $newName;
        }
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
