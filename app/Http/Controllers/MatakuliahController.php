<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
         $matakuliah = Matakuliah::all();
         $matakuliah = Matakuliah::paginate(5);
        return view('matakuliah.index',['matakuliah'=>$matakuliah]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('matakuliah.form',['action'=>"simpan"]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        $matakuliah = new Matakuliah;
        $matakuliah->nama_matkul = $request->nama_matkul;
        $matakuliah->save();
        return redirect('/matakuliah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $matakuliah = Matakuliah::find($id);
        return view('matakuliah.edit',['action'=>"delete",'matakuliah'=>$matakuliah]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
           $matakuliah = Matakuliah::find($id);
        return view('matakuliah.edit',['action'=>"update",'matakuliah'=>$matakuliah]);
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
        $matakuliah = Matakuliah::find($id);
        $matakuliah->nama_matkul = $request->nama_matkul;
        $matakuliah->save();
        return redirect('/matakuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $matakuliah = Matakuliah::find($id);
        $matakuliah->delete();
        return redirect('/matakuliah');
    }
    public function search(Request $request){
        $cari = $request->get('search');
        $matakuliah = Matakuliah::where('nama_matkul','LIKE','%'.$cari.'%')->paginate(10);
         return view('matakuliah.index',['action'=>"cari",'matakuliah'=>$matakuliah]);
    }
}
