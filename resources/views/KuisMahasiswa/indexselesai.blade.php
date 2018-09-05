@extends('layouts.layouts4')

@section('content')
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="panel panel-default">
				<br>
							
				<div class="panel-body" >
                    <p>Kuis Telah Selesai Anda Laksanakan</p>
                    <b>Benar : {{ $correct }}</b>
                    <b>Salah : {{ $wrong }}</b>
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection