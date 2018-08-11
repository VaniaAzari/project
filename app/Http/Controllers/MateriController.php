<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;
use App\Matakuliah;
use App\MatakuliahKelas;
use App\Kelas;
use Auth;
use App\Http\Requests\FormRequestMateriStore;

class MateriController extends Controller
{
    public function index($matakuliah_id,$kelas_id)
    {
            $materi = Materi::orderBy('matakuliah_id','kelas_id')
            ->where('matakuliah_id','=',$matakuliah_id)
            ->where('kelas_id','=',$kelas_id)
            ->get();

            $matakuliahkelas = MatakuliahKelas::orderBy('matakuliah_id','kelas_id')
            ->where('matakuliah_id','=',$matakuliah_id)
            ->where('kelas_id','=',$kelas_id)
            ->get();
            return view('materi.index',['materi'=>$materi,'matakuliahkelas'=>$matakuliahkelas]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($matakuliah_id,$kelas_id)
    {
       $matakuliahkelas = MatakuliahKelas::orderBy('matakuliah_id','kelas_id')
            ->where('matakuliah_id','=',$matakuliah_id)
            ->where('kelas_id','=',$kelas_id)
            ->get();
        // $matakuliah = Matakuliah::all(['id', 'nama_matkul']);
        // $kelas = Kelas::all(['id', 'nama_kelas']);
        return view('materi.form',['action'=>"simpan",'matakuliahkelas'=>$matakuliahkelas]);
    }

    /**
     * simpan a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan (FormRequestMateriStore $request)
    { 
          
        $materi = new Materi;
        $materi->file_title= $request->file_title;
        $materi->matakuliah_id= $request->matakuliah_id;
        $materi->kelas_id= $request->kelas_id;
        $materi->konten = $request->konten;
        $file_name = $request->file('file_name');
        $ext = $file_name->getClientOriginalName();
        $newName = $ext;
        $file_name->move('uploads/file',$newName);
        $materi->file_name = $newName;
        $materi->dosen_id = Auth::guard('dosen')->user()->id; 
        $materi->save();
         return redirect('bahanajardosen')->with(['success' => 'Data materi berhasil ditambahkan']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$matakuliah_id,$kelas_id)
    {
        $materi = Materi::find($id);    
        return view('materi.edit',['action'=>"delete",'materi'=>$materi]);
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
          return view('materi.edit',['action'=>"update",'materi'=>$materi]);
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
        $materi = Materi::where('dosen_id', Auth::guard('dosen')->user()->id)
        ->where('id_kelas','LIKE','%'.$cari.'%')->paginate(5);
         return view('materi.index',['action'=>"cari",'materi'=>$materi]);
    }

}
