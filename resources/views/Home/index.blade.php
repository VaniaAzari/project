@extends('layouts.layouts2')

@section('content')
		 <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                       Selamat datang di <b> E-learning Politeknik Caltex Riau </b><br>
                      <b> Alamat</b>: Jl. Umban Sari ( Patin ) No. 1, Rumbai, Kota Pekanbaru, Riau 28265
                       &nbsp; <b>  Phone </b>: (0761) 53939
                    </div>
                </div>
            </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two" style="height: 134px;width: 230px;">
                         <div class="dashboard-div-wrapper bk-clr-three" style=" height: 84px; width: 211px;"> 
                        <h1><b>{{ $hitungmahasiswa }}</b></h1>  </div>
  	                         <h5> <font color="#fffff">Mahasiswa</font> </h5>
                       
                     </div>
                </div>
             <div class="col-md-3 col-sm-3 col-xs-6">
                   <div class="dashboard-div-wrapper bk-clr-two" style="height: 134px;width: 230px;">
                         <div class="dashboard-div-wrapper bk-clr-three" style=" height: 84px; width: 211px;"> 
                        <h1><b>{{ $hitungdosen }}</b></h1></div>                           
                         <h5><font color="#fffff">Dosen</font></h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="dashboard-div-wrapper bk-clr-two" style="height: 134px;width: 230px;">
                         <div class="dashboard-div-wrapper bk-clr-three" style=" height: 84px; width: 211px;"> 
                       <h1><b>{{ $hitungkelas }}</b></h1></div>
                         <h5> <font color="#fffff">Kelas</font></h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two" style="height: 134px;width: 230px;">
                         <div class="dashboard-div-wrapper bk-clr-three" style=" height: 84px; width: 211px;"> 
                        <h1><b>{{ $hitungmatakuliah }}</b></h1></div>
                         <h5> <font color="#fffff">Matakuliah</font></h5>
                    </div>
                </div>
                <br><br><br><br><br><br>
                <div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                     		            Pengumuman
                            </div>
                            <div class="panel-body">
                               @foreach($pengumuman as $key => $value)
                                    <span class="glyphicon glyphicon-comment  text-warning" ></span>
                                    <b>{{ $value->judul }}</b>
                                    <h5><b>{!! $value->created_at !!}</b></h5>
                                    <p>{!! $value->isi !!}</p>

                                @endforeach 
                                                          
                            </div>
                          </div>
                        </div>

           
@endsection