<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use Alert;
use App\Http\Requests\FormRequestStore;

class DosenController extends Controller
{
     public function index()
    {
        $dosen = Dosen::all();
        $dosen = Dosen::paginate(5);
        return view('dosen.index',['dosen'=>$dosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dosen.form',['action'=>"simpan"]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(FormRequestStore $request)
    {
        $dosen = new Dosen;
        $dosen->username = $request->username;
        $dosen->nama = $request->nama;
        $dosen->jenis_kelamin = $request->jenis_kelamin;
        $dosen->email = $request->email;
        $dosen->password = $request->password;
        $file_name = $request->file('file_name');
        $ext = $file_name->getClientOriginalName();
        $newName = $ext;
        $file_name->move('uploads/gambar',$newName);
        $dosen->file_name = $newName;
        $dosen->save();
        return redirect('/dosen')->with(['success' => 'Data dosen berhasil ditambahkan']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit',['action'=>"delete",'dosen'=>$dosen]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit',['action'=>"update",'dosen'=>$dosen]);
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
        $dosen = dosen::find($id);
        $dosen->username = $request->username;
        $dosen->nama = $request->nama;
        $dosen->jenis_kelamin = $request->jenis_kelamin;
        $dosen->email = $request->email;
        $dosen->password = $request->password;
         if (empty($request->file('file_name'))){
            $dosen->file_name = $dosen->file_name;
        }
        else{
            unlink('uploads/gambar/'.$dosen->file_name); //menghapus file lama
            $file_name = $request->file('file_name');
            $ext = $file_name->getClientOriginalName();
            $newName = $ext;
            $file_name->move('uploads/gambar',$newName);
            $dosen->file_name = $newName;
        }
        $dosen->save();
        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/dosen');
    }

    public function search(Request $request){
        $cari = $request->get('search');
        $dosen = Dosen::where('nama','LIKE','%'.$cari.'%')->paginate(10);
         return view('dosen.index',['action'=>"cari",'dosen'=>$dosen]);
    }

}
