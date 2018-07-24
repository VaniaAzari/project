@extends('layouts.layouts4')

@section('content')

	<section class="content">
		<div class="row ">
			<div class="col-12">
				<form class="form-horizontal" method="POST" action="/tugasmahasiswa/{{ $action }}{{($action!='simpan')? '/'.$tugasmahasiswa['id'] : ''}}">
					{{ csrf_field() }}
					<div class="modal-header">
						<h3>Tugas</h3>
					</div>

					<div class="modal-body">
						 <div class="alert alert-danger">
                             <strong>Pengumpulan Tugas: </strong> Kumpulkan tugas berdasarkan matakuliah masing-masing dengan tanggal yang ditetapkan
                          </div>
						
						<div class="form-group">
							<h3>{{ $tugasmahasiswa['id_matkul']}}</h3>				
						</div>
						<div class="form-group">
							<b>TO: {{ $tugasmahasiswa['id_kelas'] }} </b>
						</div>
						<div class="form-group">
							{!! $tugasmahasiswa['konten'] !!}
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">File</label>
							<div class="col-sm-11">
								<input type="file" class="form-control" name="file"  value="{{ ($action!='simpan') ? $tugasmahasiswa['file'] : '' }}">
							</div>
						</div>
											
					<div class="modal-footer">
						<button class="btn btn-default" url="/tugasmahasiswa">Cancel</button> 
						<button type="submit" class="btn {{($action!='delete')? 'btn-success' : 'btn-danger' }} pull-right" >{{ ucwords($action) }}</button>
					</div>
				</form>
			</div>
		</div>	
	</section>
@endsection
