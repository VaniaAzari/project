<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;

class ProdiController extends Controller
{
     public function index()
    {
        $prodi = Prodi::all();
        $prodi = Prodi::paginate(5);
        return view('prodi.index',['prodi'=>$prodi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodi.form',['action'=>"simpan"]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        $prodi = new Prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();
        return redirect('/prodi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.form',['action'=>"delete",'prodi'=>$prodi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.form',['action'=>"update",'prodi'=>$prodi]);
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
        $prodi = Prodi::find($id);
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();
        return redirect('/prodi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete();
        return redirect('/prodi');
    }

    public function search(Request $request){
        $cari = $request->get('search');
        $prodi = Prodi::where('nama_prodi','LIKE','%'.$cari.'%')->paginate(10);
         return view('prodi.index',['action'=>"cari",'prodi'=>$prodi]);
    }

}
