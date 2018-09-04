@extends('layouts.layouts4')

@section('content')
<section class="content">
	<h4 class="page-head-line">Silakan Pilih Dulu Kuis Nya</h4>
	<div class="row">
		<div class="col-12">
			<div class="panel panel-default">
				<br>
							
				<div class="panel-body" >
					<table class="table table-bordered table-striped table-hover" id="dataTable">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($listkuis as $key => $kuis)
                                <tr>
                                    <td>{{ $key + 1}}</td>
                                    <td>{{ $kuis->name }}</td>
                                    <td><a href="{{ route('kuis.mahasiswa.soal', ['id' => $kuis->id] ) }}" class="btn btn-info">Kerjakan</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection