<?php

namespace App\Http\Controllers;

use App\Materi;
use Illuminate\Http\Request;
use App\MatakuliahKelas;



class DownloadController extends Controller
{
    public function downfunc($matakuliah_id,$kelas_id){

   		   $downloads = Materi::orderBy('matakuliah_id')
         ->where('matakuliah_id','=',$matakuliah_id)
         ->where('kelas_id','=',$kelas_id)
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
