@extends('layouts.layouts3')

@section('content')
	<section class="content">
		<div class="row ">
			<div class="col-12">
				<form class="form-horizontal" method="POST" action="/tugas/{{ $action }}{{($action!='simpan')? '/'.$tugas['id'] : ''}}">
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
							<label class="col-sm-4 control-label">Matakuliah</label>
							<div class="col-sm-8">
								<select name="id_matkul" class="form-control" >
    								  	<option value="">Pilih Matakuliah</option>
   									 @foreach($item as $value)
    									 <option>{{$value->nama_matkul}}</option>
  									  @endforeach
 									 </select>
								<input type="hidden" class="form-control" name="id" value="{{ ($action!='simpan') ? $tugas['id'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Kelas</label>
							<div class="col-sm-8">
							<select name="id_kelas" class="form-control" >
    								  	<option value="">Pilih Kelas</option>
   									 @foreach($items as $value)
    									 <option>{{$value->nama_kelas}}</option>
  									  @endforeach
 									 </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Konten</label>
							<div class="col-sm-8">
								<textarea name="konten" style="width: 753px; height: 140px;" value="{{ ($action!='simpan') ? $tugas['konten'] : '' }}"></textarea> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Tanggal Masuk</label>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="tanggal_masuk"  value="{{ ($action!='simpan') ? $materi['tanggal_masuk'] : '' }}">
							</div>
						</div>
							<div class="form-group">
							<label class="col-sm-4 control-label">Tanggal Akhir</label>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="tanggal_akhir"  value="{{ ($action!='simpan') ? $materi['tanggal_akhir'] : '' }}">
							</div>
						</div>
					
						
					<div class="modal-footer">
						<button class="btn btn-default" url="/tugas">Cancel</button> 
						<button type="submit" class="btn {{($action!='delete')? 'btn-success' : 'btn-danger' }} pull-right" >{{ ucwords($action) }}</button>
					</div>
				</form>
			</div>
		</div>	
	</section>
@endsection