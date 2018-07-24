<?php

namespace App\Http\Controllers;

use App\Materi;
use Illuminate\Http\Request;


class DownloadController extends Controller
{
    public function downfunc(){
   		   $downloads=Materi::all();
      	 $downloads = Materi::paginate(6);
   		return view('download.viewfile',compact('downloads'));

   		
   }
    public function search(Request $request){
        $cari = $request->get('search');
        $downloads = Materi::where('file_title','LIKE','%'.$cari.'%')->paginate(10);
         return view('download.viewfile',['action'=>"cari",'downloads'=>$downloads]);
    }
 public function edit($id)
    {
         $kelas = Materi::find($id);
        return view('download.viewfile',compact('kelas'));
    }
    
    
}
