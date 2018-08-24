<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupKuis;
use App\Kelas;
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
        $groupKuis->Save();

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
                    <a href="#" class="btn btn-danger btn-icon btn-circle delete">
                        <i class="fa fa-times"></i>
                    </a>';
        })->addIndexColumn()->make(true);
    }

    public function deleteGroup(Request $request)
    {
        $kelas = GroupKuis::find($request->id);
        $kelas->delete();
        
        return $kelas ? response()->json(['message' => 'Group Kuis Berhasil Di Hapus'], 200)
                          : response()->json(['message' => 'Group Kuis Gagal Di Hapus'], 400);
    }
}
