@extends('layouts.layouts2')

@section('content')
	<section class="content">
		<div class="row ">
			<div class="col-12">
				<form class="form-horizontal" method="POST" action="/matakuliahkelas/{{ $action }}{{($action!='edit')? '/'.$matakuliahkelas['id'] : ''}}">
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
							<label class="col-sm-4 control-label">Nama Matakuliah</label>
							<div class="col-sm-8">
								<select name="id_matkul" class="form-control" >
										<option value="">Pilih Matakuliah</option>
									@foreach($matakuliah as $category)
   									 <option value="{{ $category->nama_matkul }}"  @if($category->nama_matkul==$matakuliahkelas->id_matkul) selected='selected' @endif >{{ $category->nama_matkul }}</option>

									@endforeach 
								</select>
								<input type="hidden" class="form-control" name="id" value="{{ ($action!='edit') ? $matakuliahkelas['id'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Kelas</label>
							<div class="col-sm-8">
									<select name="id_kelas" class="form-control" >
										<option value="">Pilih Kelas</option>
									@foreach($kelas as $category)
   									 <option value="{{ $category->nama_kelas }}"  @if($category->nama_kelas==$matakuliahkelas->id_kelas) selected='selected' @endif >{{ $category->nama_kelas }}</option>

									@endforeach 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Dosen</label>
							<div class="col-sm-8">
									<select name="dosen_id" class="form-control" >
										<option value="">Pilih Dosen</option>
									@foreach($dosen as $category)
   									 <option value="{{ $category->nama }}"  @if($category->nama==$matakuliahkelas->dosen_id) selected='selected' @endif >{{ $category->nama }}</option>

									@endforeach 
								</select>
							</div>
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