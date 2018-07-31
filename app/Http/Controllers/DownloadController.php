<?php

namespace App\Http\Controllers;

use App\Materi;
use Illuminate\Http\Request;
use App\MatakuliahKelas;



class DownloadController extends Controller
{
    public function downfunc($id_matkul,$id_kelas){

   		   $downloads = Materi::orderBy('id_matkuls')
         ->where('id_matkuls','=',$id_matkul)
         ->where('id_kelas','=',$id_kelas)
         ->get();
         // return response()->json($downloads);
      	
   		   return view('download.viewfile',['downloads'=>$downloads]);

   		
   }
    public function search(Request $request){
        $cari = $request->get('search');
        $downloads = Materi::where('file_title','LIKE','%'.$cari.'%');
         return view('download.viewfile',['action'=>"cari",'downloads'=>$downloads]);
    }

  
    
}
