@extends('layouts.layouts4')

@section('content')

	<section class="content">
		<div class="row ">
			<div class="col-12">
				<form class="form-horizontal" method="POST" action="/tugasmahasiswa/{{ $action }}{{($action!='detail')? '/'.$tugasmahasiswa['id'] : ''}}" enctype="multipart/form-data">
					{{ csrf_field() }}
						 <h4 class="page-head-line">Tugas</h4>
					<div class="modal-body">
						<div class="form-group">
							<h3>{{ $tugasmahasiswa['id_matkul']}}</h3>
						</div>
						
						<div class="form-group">
							<b> TO : {{ $tugasmahasiswa['id_kelas'] }} </b>
						</div>
						
						<div class="form-group">
							 {!! $tugasmahasiswa['konten'] !!}
						</div>
						@foreach($tugasmahasiswa2 as $value)
						<div class="form-group">
							<label class="control-label">File &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  : </label>
							<span class="glyphicon glyphicon-file  text-warning" ></span><a> &nbsp; {{ $value['file_name']}} </a>
						</div>
						@endforeach
						<div class="modal-footer"> 
						<a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
					</div>
				</form>
			</div>
		</div>	
	</section>
@endsection
