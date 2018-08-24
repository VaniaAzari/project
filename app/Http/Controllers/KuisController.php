<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupKuis;
use App\Kelas;
use App\Matakuliah;

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
}
