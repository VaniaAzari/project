<div class="table-responsive">
	<table id="tabel_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Title</th>
				<th>Mapel</th>
				<th>Kelas</th>
				<th>Konten</th>
				<th>File</th>	
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@if(!empty($materi))
				@foreach($materi as $key => $value)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $value['file_title'] }}</td>
					<td>{{ $value->matakuliah->nama_matkul }}</td>
					<td>{{ $value->kelas->nama_kelas }}</td>
					<td>{!! $value['konten'] !!}</td>
					<td>{{ $value['file_name'] }}</td>
			
					
					<td>
						<span class="btn btn-group">
							<a href="/materi/edit/{{$value['id']}}/{{$value['matakuliah_id']}}/{{$value['kelas_id']}}" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i>&nbsp;Ubah</a>
							<a href="/materi/show/{{$value['id']}}/{{$value['matakuliah_id']}}/{{$value['kelas_id']}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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