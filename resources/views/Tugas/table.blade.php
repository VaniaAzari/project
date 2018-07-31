<div class="table-responsive">
	<table id="tabel_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Matakuliah</th>
				<th>Kelas</th>
				<th>Konten</th>
				<th>Tanggal masuk</th>
				<th>Tanggal akhir</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@if(!empty($tugas))
				@foreach($tugas as $key => $value)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $value['id_matkul'] }}</td>
					<td>{{ $value['id_kelas'] }}</td>
					<td>{!! $value['konten'] !!}</td>
					<td>{!! $value['tanggal_masuk'] !!}</td>
					<td>{!! $value['tanggal_akhir'] !!}</td>
				
			
					
					<td>
						<span class="btn btn-group">
							<a href="/tugas/detail/{{$value['id']}}/{{$value['id_matkul']}}/{{$value['id_kelas']}}/{{$value['tanggal_masuk']}}" 
							class="btn btn-sm btn-info" ><i class="fa fa-edit"></i>&nbsp;Detail</a>
							<a href="/tugas/edit/{{$value['id']}}/{{$value['id_matkul']}}/{{$value['id_kelas']}}" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i>&nbsp;Ubah</a>
							<a href="/tugas/show/{{$value['id']}}/{{$value['id_matkul']}}/{{$value['id_kelas']}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i>&nbsp;Hapus</a>
						</span>
					</td>
				</tr>
				@endforeach
			@else
				<tr>
					<td colspan="7">Data Masih Kosong</td>
				</tr>
			@endif
		</tbody>
		<tfoot>
			
		</tfoot>
	</table>

</div>	