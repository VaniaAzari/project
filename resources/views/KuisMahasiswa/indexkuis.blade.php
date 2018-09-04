@extends('layouts.layouts4')

@section('content')
<section class="content">
	<h4 class="page-head-line">Silakan Pilih Dulu Kuis Nya</h4>
	<div class="row">
		<div class="col-12">
			<div class="panel panel-default">
				<br>
							
				<div class="panel-body" >
                    <div class="row">
                        @foreach($listkuis as $key => $kuis)
                            <div class="col-md-6">
                                <div class="panel-kuis">
                                    <p>{{$key + 1}}. {{ $kuis->pertanyaan}}</p>
                                </div>
                                <div class="panel-jawaban">
                                    <ul class="list-jawaban">
                                        @foreach($listkuis->kuisJawaban as $jawaban)
                                            <li>{{ $jawaban->value }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection