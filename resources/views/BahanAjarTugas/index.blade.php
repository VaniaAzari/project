@extends('layouts.layouts4')

@section('content')
<section class="content">
		 <h4 class="page-head-line">Bahan Ajar</h4>
	<div class="row">
		<div class="col-12">
			<div class="panel panel-default">
				<div class="panel-heading text-right">
					
				</div>
				<br>
							
				<div class="panel-body" >
					@if ($message = Session::get('success'))
					  <div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
						  <strong>{{ $message }}</strong>
					  </div>
					@endif
					@includeif('bahanajartugas.table')
					
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection