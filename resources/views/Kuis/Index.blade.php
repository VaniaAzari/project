@extends('layouts.layouts3')

@section('content')
<section class="content">
	<h4 class="page-head-line">Kuis</h4>
	<div class="row">
		<div class="col-12">
			<div class="panel panel-default">
				<div class="panel-heading text-right">
                    <a href="/kelas/create" class="btn btn-sm btn-primary" ><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
				</div>
				<br>
							
				<div class="panel-body" >
					<table class="table table-bordered">
                        <thead>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Mata Kuliah</th>
                            <th>Soal</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection