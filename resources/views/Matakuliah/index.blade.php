@extends('layouts.layouts2')

@section('content')
<section class="content">
	 <h4 class="page-head-line">Data Matakuliah</h4>
	<div class="row">
		<div class="col-12">
			<div class="panel panel-default">
				<ul class="nav nav-tabs">
                                <li class=""><a href="{{ URL::to('/prodi') }}">Prodi</a>
                                </li>
                                <li class=""><a href="{{ URL::to('/kelas') }}">Kelas</a>
                                </li>
                                <li class="active"><a href="{{ URL::to('/matakuliah') }}">Matakuliah</a>
                                </li>
                 </ul>
                 <br>
				<div class="panel-heading text-right">
					<a href="/matakuliah/create" class="btn btn-sm btn-primary" ><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
				</div>				 
				<br>
					<div class="container">
        			  {!! Form::open(['method'=>'GET','url'=>'carimatakuliah','role'=>'search']) !!}
              			{{ csrf_field() }}
               			 <div class="input-group">
                			  <input type="text" class="form-control" name="search" placeholder="Search nama matakuliah...">
                 		   		<span class="input-group-btn">
                      			  <button type="submit" class="btn btn-default">
                           			 <span class="glyphicon glyphicon-search"></span>
                       			  </button>
								</span>
						 </div>
         					{!! Form::close() !!}
       					 </div>
				<div class="panel-body" >
					@if ($message = Session::get('success'))
					  <div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
						  <strong>{{ $message }}</strong>
					  </div>
					@endif
					@includeif('matakuliah.table')
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection