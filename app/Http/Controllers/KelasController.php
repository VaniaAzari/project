<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Http\Requests\FormRequestKelasStore;

class KelasController extends Controller
{
     public function index()
    {
        $kelas = Kelas::all();
        $kelas = Kelas::paginate(5);
        return view('kelas.index',['kelas'=>$kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('kelas.form',['action'=>"simpan"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(FormRequestKelasStore $request)
    {
        
        $kelas = new Kelas;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->save();
        return redirect('/kelas')->with(['success' => 'Data kelas berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $kelas = Kelas::find($id);
        return view('kelas.edit',['action'=>"delete",'kelas'=>$kelas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $kelas = Kelas::find($id);
        return view('kelas.edit',['action'=>"update",'kelas'=>$kelas]);
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
        $kelas = Kelas::find($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->save();
        return redirect('/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/kelas');
    }


 public function search(Request $request){
        $cari = $request->get('search');
        $kelas = Kelas::where('nama_kelas','LIKE','%'.$cari.'%')->paginate(10);
         return view('kelas.index',['action'=>"cari",'kelas'=>$kelas]);
    }
}
