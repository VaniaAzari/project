@extends('layouts.layouts4')

@section('content')
<section class="content">
	<h4 class="page-head-line">Silakan Pilih Dulu Kuis Nya</h4>
	<div class="row">
		<div class="col-12">
			<div class="panel panel-default">
				<br>
							
				<div class="panel-body" >
                    <form action="{{ route('kuis.mahasiswa.hitung') }}">
                        <div class="row">
                            {{ csrf_field() }}
                            @foreach($listkuis as $key => $kuis)
                                <div class="col-md-12">
                                    <div class="panel-kuis">
                                        <p>{{$key + 1}}. {{ $kuis->pertanyaan}}</p>
                                    </div>
                                    <div class="panel-jawaban">
                                        <ul class="list-jawaban">
                                            <?php $letter = 'A'; ?>
                                            @foreach($kuis->kuisJawaban as $jawaban)
                                                <?php 
                                                    $jawaban[$letter] = $jawaban;
                                                    ?>
                                                <div class="radio">
                                                    {{ $letter }} . <label><input type="radio" name="jawaban[]" value="{{ $jawaban->value }}"> {{ $jawaban->value }}</label>
                                                </div>
                                                    <?php $letter++; ?>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if($listkuis->nextPageUrl())
                            <a href="{{ $listkuis->nextPageUrl() }}" class="btn btn-success btn-sm pull-right"><i class="fa fa-arrow-circle-right"></i> Berikutnya</a>
                        @endif
                    </form>
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection