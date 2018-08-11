<div class="table-responsive">
	<table id="tabel_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Matakuliah</th>
				<th>Kelas</th>
				<th>Konten</th>
				<th>File</th>
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
					<td>{{ $value->matakuliah->nama_matkul }}</td>
					<td>{{ $value->kelas->nama_kelas }}</td>
					<td>{!! $value['konten'] !!}</td>
					<td>{!! $value['file_name'] !!}</td>
					<td>{!! $value['tanggal_masuk'] !!}</td>
					<td>{!! $value['tanggal_akhir'] !!}</td>
				
			
					
					<td>
						<span class="btn btn-group">
							<a href="/tugas/detail/{{$value['id']}}/{{$value['matakuliah_id']}}/{{$value['kelas_id']}}/{{$value['tanggal_masuk']}}" 
							class="btn btn-sm btn-info" ><span class="glyphicon glyphicon-tasks"></span>&nbsp;Detail</a>
							<a href="/tugas/edit/{{$value['id']}}/{{$value['matakuliah_id']}}/{{$value['kelas_id']}}" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i>&nbsp;Ubah</a>
							<a href="/tugas/show/{{$value['id']}}/{{$value['matakuliah_id']}}/{{$value['kelas_id']}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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