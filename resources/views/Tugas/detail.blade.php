@extends('layouts.layouts3')

@section('content')

  <section class="content">
    <div class="row ">
      <div class="col-12">
        <form class="form-horizontal" method="POST" action="/tugas/{{ $action }}{{($action!='kirim')? '/'.$tugas['id'] : ''}}" >
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
                            </div>
                             <div class="panel-footer">
                           <h6>{{ $tugas['id_kelas'] }}</h6>
                        </div>
                    </div>
                  </div>
                </div>
          </form>
          <br>
                <div class="table-responsive">
                  <table id="tabel_data" class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>File</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                         @foreach($tugasmahasiswa as $key => $value)
                                <tr>
                                  <td>{{ $key+1 }}</td>
                                  <td>{{ $value['file_name'] }}</td>
                                  <td>{!! $value->created_at->format('d/M/Y')!!}</td>
                                  <td>  <a href="{{ url('upload/files/'.$value->file_name) }}" download="{{$value->file_name}}">
                              <button type="button" class="btn btn-primary">Download 
                               <i class="glyphicon glyphicon-download"></i>
                              </button>
                              </a></td>
                                </tr>
                          @endforeach
                             
                    </tbody>
                </table>

              </div>  
          <div class="modal-footer"> 
            <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
          </div>
      </div>
    </div>  
  </section>
@endsection
