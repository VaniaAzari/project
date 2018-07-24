<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;
use App\Matakuliah;

class MateriController extends Controller
{
    public function index()
    {
        
         $materi = Materi::all();
         $materi = Materi::paginate(5);
        return view('materi.index',['materi'=>$materi]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Matakuliah::all(['id', 'nama_matkul']);
        return view('materi.form',['action'=>"simpan",'items'=>$items]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan (Request $request)
    {
        $materi = new Materi;
        $materi->file_title= $request->file_title;
        $materi->id_matkuls= $request->id_matkuls;
        $materi->konten = $request->konten;
        $materi->file_name = $request->file_name;
        $materi->save();
        return redirect('/materi');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materi = Materi::find($id);
        $items = Matakuliah::all(['id', 'nama_matkul']);
        return view('materi.edit',['action'=>"delete",'materi'=>$materi,'items'=>$items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $materi = Materi::find($id);
          $items = Matakuliah::all(['id', 'nama_matkul']);
        return view('materi.edit',['action'=>"update",'materi'=>$materi,'items'=>$items]);
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
         $materi = Materi::find($id);
        $materi->file_title = $request->file_title;
        $materi->id_matkuls= $request->id_matkuls;
        $materi->konten = $request->konten;
        $materi->file_name = $request->file_name;
        $materi->save();
        return redirect('/materi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $materi = Materi::find($id);
        $materi->delete();
        return redirect('/materi');
    }
    public function search(Request $request){
        $cari = $request->get('search');
        $materi = Materi::where('file_title','LIKE','%'.$cari.'%')->paginate(10);
       
         return view('materi.index',['action'=>"cari",'materi'=>$materi]);
    }

    public function upload(Request $request) {
    $path = $request->file('file_name')->store('public');
    return view('materi.index');
}

}
