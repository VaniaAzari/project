@extends('layouts.layouts3')

@section('content')
	<section class="content">
		<div class="row ">
			<div class="col-12">
				<form class="form-horizontal" method="POST" action="/materi/{{ $action }}{{($action!='simpan')? '/'.$materi['id'] : ''}}" enctype="multipart/form-data">
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
								<input type="text" class="form-control" name="file_title" placeholder="Title" value="{{ ($action!='simpan') ? $materi['file_title'] : '' }}">
								<input type="hidden" class="form-control" name="id" value="{{ ($action!='simpan') ? $materi['id'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Mata pelajaran</label>
							<div class="col-sm-8">
							<select name="id_matkuls" class="form-control" >
    								  	<option value="">Pilih Mata pelajaran</option>
   									 @foreach($items as $value)
    									 <option>{{$value->nama_matkul}}</option>
  									  @endforeach
 									 </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Kelas</label>
							<div class="col-sm-8">
							<select name="id_kelas" class="form-control" >
    								  	<option value="">Pilih Kelas</option>
   									 @foreach($kelas as $value)
    									 <option>{{$value->nama_kelas}}</option>
  									  @endforeach
 									 </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Konten</label>
							<div class="col-sm-8">
								<textarea id="konten" name="konten" style="width: 753px; height: 200px;" value="{{ ($action!='simpan') ? $materi['konten'] : '' }}"></textarea> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">File</label>
							<div class="col-sm-8">
								<input type="file" class="form-control" name="file_name"  value="{{ ($action!='simpan') ? $materi['file_name'] : '' }}">
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