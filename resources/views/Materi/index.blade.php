@extends('layouts.layouts3')

@section('content')
<section class="content">
		 <h4 class="page-head-line">Data materi</h4>
	<div class="row">
		<div class="col-12">
			<div class="panel panel-default">
				<div class="panel-heading text-right">
					<a href="/materi/create/{id_matkul}/{id_kelas}" class="btn btn-sm btn-primary" ><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
				</div>
				<br>
				<div class="container">
        			  {!! Form::open(['method'=>'GET','url'=>'carimateri','role'=>'search']) !!}
              			{{ csrf_field() }}
               			 <div class="input-group">
                			  <input type="text" class="form-control" name="search" placeholder="Search..">
                 		   		<span class="input-group-btn">
                      			  <button type="submit" class="btn btn-default">
                           			 <span class="glyphicon glyphicon-search"></span>
                       			  </button>
								</span>
						 </div>
         					{!! Form::close() !!}
       					 </div>
				
				<div class="panel-body" >
					@includeif('materi.table')
					
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection