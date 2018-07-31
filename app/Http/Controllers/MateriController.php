<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;
use App\Matakuliah;
use App\Kelas;
use Auth;

class MateriController extends Controller
{
    public function index($id_matkul,$id_kelas)
    {
            $materi = Materi::orderBy('id_matkuls','id_kelas')
            ->where('id_matkuls','=',$id_matkul)
            ->where('id_kelas','=',$id_kelas)
            ->get();
            return view('materi.index',['materi'=>$materi]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Matakuliah::all(['id', 'nama_matkul']);
        $kelas = Kelas::all(['id', 'nama_kelas']);
        return view('materi.form',['action'=>"simpan",'items'=>$items,'kelas'=>$kelas]);
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
        $materi->id_kelas= $request->id_kelas;
        $materi->konten = $request->konten;
        $file_name = $request->file('file_name');
        $ext = $file_name->getClientOriginalName();
        $newName = $ext;
        $file_name->move('uploads/file',$newName);
        $materi->file_name = $newName;
        $materi->user_id = Auth::guard('dosen')->id(); 
        $materi->save();
         return redirect('bahanajardosen');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_matkuls,$id_kelas)
    {
        $materi = Materi::find($id);
        $items = Matakuliah::all(['id', 'nama_matkul']);
        $kelas = Kelas::all(['id', 'nama_kelas']);
        return view('materi.edit',['action'=>"delete",'materi'=>$materi,'items'=>$items,'kelas'=>$kelas]);
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
          $kelas = Kelas::all(['id', 'nama_kelas']);
          return view('materi.edit',['action'=>"update",'materi'=>$materi,'items'=>$items,'kelas'=>$kelas]);
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
        $materi->id_kelas= $request->id_kelas;
        $materi->konten = $request->konten;
      if (empty($request->file('file_name'))){
            $materi->file_name = $materi->file_name;
        }
        else{
            unlink('uploads/file/'.$materi->file_name); //menghapus file lama
            $file_name = $request->file('file_name');
            $ext = $file_name->getClientOriginalName();
            $newName = $ext;
            $file_name->move('uploads/file',$newName);
            $materi->file_name = $newName;
        }
        $materi->save();
        return redirect('/bahanajardosen');
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
        return redirect('/bahanajardosen');
    }
    public function search(Request $request){
        $cari = $request->get('search');
        $materi = Materi::where('user_id', Auth::guard('dosen')->user()->id)
        ->where('id_kelas','LIKE','%'.$cari.'%')->paginate(5);
         return view('materi.index',['action'=>"cari",'materi'=>$materi]);
    }

}
