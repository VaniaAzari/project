<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupKuis;
use App\Kelas;
use App\Kuis;
use App\KuisJawaban;
use App\Matakuliah;
use Yajra\Datatables\Datatables;

class KuisController extends Controller
{
    public function indexGroup(Kelas $kelas, Matakuliah $matakuliah)
    {
        $kelasList = Kelas::get();
        $matkulList = Matakuliah::get();
        return view('Kuis.index')
            ->with('kelasList',$kelasList)
            ->with('matkulList',$matkulList);
    }

    public function saveGroup(Request $request)
    {
        $groupKuis = new GroupKuis;
        $groupKuis->name = $request->name;
        $groupKuis->id_kelas = $request->id_kelas;
        $groupKuis->id_matakuliah = $request->id_matakuliah;
        $groupKuis->save();

        return $groupKuis ? response()->json(['message' => 'Group Kuis Berhasil Di Simpan'], 200)
                          : response()->json(['message' => 'Group Kuis Gagal Di Simpan'], 400);
    }

    public function listGroup(GroupKuis $groupKuis)
    {
        $data = GroupKuis::get();
        return Datatables::of($data)
        ->addColumn('kelas', function ($model) {
            return $model->kelas->nama_kelas;
        })
        ->addColumn('matakuliah', function ($model) {
            return $model->matkul->nama_matkul;
        })
        ->addColumn('action', function ($model) {
            return '<a href="#" class="btn btn-info btn-icon btn-circle edit">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <a href="'.route("kuis", ['id' => $model->id]).'" class="btn btn-warning btn-icon btn-circle edit">
                        <i class="fa fa-newspaper-o"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-icon btn-circle delete">
                        <i class="fa fa-times"></i>
                    </a>';
        })->addIndexColumn()->make(true);
    }

    public function updateGroup(Request $request)
    {
        $groupKuis = GroupKuis::find($request->id);
        $groupKuis->name = $request->name;
        $groupKuis->id_kelas = $request->id_kelas;
        $groupKuis->id_matakuliah = $request->id_matakuliah;
        $groupKuis->save();

        return $groupKuis ? response()->json(['message' => 'Group Kuis Berhasil Di Update'], 200)
                          : response()->json(['message' => 'Group Kuis Gagal Di Update'], 400);
    }

    public function deleteGroup(Request $request)
    {
        $kelas = GroupKuis::find($request->id);
        $kelas->delete();
        
        return $kelas ? response()->json(['message' => 'Group Kuis Berhasil Di Hapus'], 200)
                          : response()->json(['message' => 'Group Kuis Gagal Di Hapus'], 400);
    }

    public function indexKuis($id)
    {
        return view('Kuis.indexkuis', compact('id'));
    }

    public function saveKuis(Request $request)
    {
        $kuis = new Kuis;
        $kuis->pertanyaan = $request->pertanyaan;
        $kuis->group_kuis_id = $request->group_kuis_id;
        $kuis->save();

        foreach($request->jawaban as $key => $jawaban)
        {
            $kuisJawaban = New KuisJawaban;
            $kuisJawaban->value = $jawaban['value'];
            $kuisJawaban->ket = $request->status[$key]['ket'] == 'true' ? 1 : 0;
            $kuisJawaban->kuis_id = $kuis->id;
            $kuisJawaban->save();
        }

        return $kuisJawaban ? response()->json(['message' => 'Kuis Berhasil Di Simpan'], 200)
                          : response()->json(['message' => 'Kuis Gagal Di Simpan'], 400);
    }

    public function listKuis(Kuis $kuis)
    {
        $data = Kuis::get();
        return Datatables::of($data)
        ->addColumn('jawaban', function ($model) {
            // $ul = '<ul>';
            // foreach($model->kuisJawaban as $jwbn)
            // {
            //     $ul = '<li>'.$jwbn->value.'</li>';
            // }
            // $ul ='</ul>';
            // return $ul;
            return $model->kuisJawaban;
        })
        ->addColumn('action', function ($model) {
            return '<a href="#" class="btn btn-info btn-icon btn-circle edit">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <a href="#" class="btn btn-warning btn-icon btn-circle edit">
                        <i class="fa fa-newspaper-o"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-icon btn-circle delete">
                        <i class="fa fa-times"></i>
                    </a>';
        })->addIndexColumn()->make(true);
    }

    public function deleteKuis(Request $request,Kuis $kuis, KuisJawaban $kuisJawaban)
    {
        $kuis = Kuis::findOrFail($request->id);
        $deleteJwbn = KuisJawaban::where('kuis_id',$kuis->id)->get();

        foreach($deleteJwbn as $delete)
        {
            $delete->delete();
        }
        $kuis->delete();

        return $kuis ? response()->json(['message' => 'Kuis Berhasil Di Hapus'], 200)
                          : response()->json(['message' => 'Kuis Gagal Di Hapus'], 400);
    }
}
