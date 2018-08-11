@extends('layouts.layouts4')

@section('content')
<section class="content">
	<h4 class="page-head-line">Materi</h4>
		<div class="row">
		<div class="col-12">
		<div class="container">
        			  {!! Form::open(['method'=>'GET','url'=>'caribahan','role'=>'search']) !!}
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
       					<br>
					<div class="panel panel-default">
						<div class="panel-body" >
						@includeif('download.table')
 			</div>
		</div>
	</div>	
</div>
</section>
@endsection
