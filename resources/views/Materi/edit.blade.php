@extends('layouts.layouts3')

@section('content')
    <section class="content">
        <div class="row ">
            <div class="col-12">
                <form class="form-horizontal" method="POST" action="/materi/{{ $action }}{{($action!='edit')? '/'.$materi['id'] : ''}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h3>Form {{ ucwords($action) }}</h3>
                    </div>
                    <div class="modal-body">
                        @if($action=="delete")
                            <div class="alert alert-danger">
                                <strong>Perhatian!</strong> Menekan tombol delete akan menghapus data.
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Title</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="file_title" placeholder="Title" value="{{ ($action!='edit') ? $materi['file_title'] : '' }}">
                                <input type="hidden" class="form-control" name="id" value="{{ ($action!='edit') ? $materi['id'] : '' }}">
                            </div>
                        </div>                      
                       
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Konten</label>
                            <div class="col-sm-8">
                                <textarea name="konten" style="width: 753px; height: 140px;"><?php echo $materi['konten'];?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">File</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="file_name"  value="{{ ($action!='edit') ? $materi['file_name'] : '' }}"><?php echo $materi['file_name'];?>
                            </div>
                        </div>
                        
                    <div class="modal-footer">
                        <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn {{($action!='delete')? 'btn-success' : 'btn-danger' }} pull-right" >{{ ucwords($action) }}</button>
                    </div>
                </form>
            </div>
        </div>  
    </section>
@endsection