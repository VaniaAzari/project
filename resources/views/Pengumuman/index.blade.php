@extends('layouts.layouts3')

@section('content')
<section class="content">
		 <h4 class="page-head-line">Pengumuman</h4>
	<div class="row">
		<div class="col-12">
			<div class="panel panel-default">
				<div class="panel-heading text-right">
					<a href="/pengumuman/create" class="btn btn-sm btn-primary" ><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
				</div>
				<br>
						
				<div class="panel-body" >
					@includeif('pengumuman.table')
					
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection