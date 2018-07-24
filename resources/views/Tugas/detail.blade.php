@extends('layouts.layouts3')

@section('content')

  <section class="content">
    <div class="row ">
      <div class="col-12">
        <form class="form-horizontal" method="POST" action="/tugas/{{ $action }}{{($action!='simpan')? '/'.$tugas['id'] : ''}}">
          {{ csrf_field() }}
             <h4 class="page-head-line">Tugas</h4>
         <div class="row">
           <div class="col-12"><br>
              <div class="col-md-12 col-sm-12">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                               <h4>{{ $tugas['id_matkul']}}</h4>
                           </div>
                          </div>
                          <div class="panel-body">
                                  <h5> {!! $tugas['konten'] !!}</h5>
                                <a href="download/{{ $tugas['file'] }}" download="{{ $tugas['file'] }}">
                                <span class="glyphicon glyphicon-file  text-warning" ></span> &nbsp; {{ $tugas['file'] }}
                              </a>                          
                            </div>
                             <div class="panel-footer">
                           <h6>{{ $tugas['id_kelas'] }}</h6>
                        </div>
                    </div>
                  </div>
                </div>
          </form>
          <div class="modal-footer"> 
            <a href="/tugas">
               <button type="button" class="btn btn-success">Back </button>
            </a>
          </div>
      </div>
    </div>  
  </section>
@endsection
