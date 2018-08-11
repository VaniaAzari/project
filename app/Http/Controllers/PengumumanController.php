<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use Auth;
use App\Http\Requests\FormRequestPengumumanStore;


class PengumumanController extends Controller
{
     public function index()
    {
         $pengumuman = Pengumuman::where('dosen_id', Auth::guard('dosen')->user()->id)->get();
            return view('pengumuman.index',['pengumuman'=>$pengumuman]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.form',['action'=>"simpan"]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan (FormRequestPengumumanStore $request)
    {
        $pengumuman = new Pengumuman;
        $pengumuman->judul= $request->judul;
        $pengumuman->isi= $request->isi;
        $pengumuman->dosen_id= Auth::guard('dosen')->user()->id; 
        $pengumuman->save();
        return redirect('/pengumuman')->with(['success' => 'Data pengumuman berhasil ditambahkan']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('pengumuman.edit',['action'=>"delete",'pengumuman'=>$pengumuman]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('pengumuman.edit',['action'=>"update",'pengumuman'=>$pengumuman]);
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
        $pengumuman = Pengumuman::find($id);
        $pengumuman->judul= $request->judul;
        $pengumuman->isi= $request->isi;
        $pengumuman->save();
        return redirect('/pengumuman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();
        return redirect('/pengumuman');
    }
}
