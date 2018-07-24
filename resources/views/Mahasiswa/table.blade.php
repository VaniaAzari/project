	<div class="table-responsive">
	<table id="tabel_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama Mahasiswa</th>	
				<th>Jenis Kelamin</th>	
				<th>Prodi</th>	
				<th>Kelas</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@if(!empty($mahasiswa))
				@foreach($mahasiswa as $key => $value)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $value['username'] }}</td>
					<td>{{ $value['nama'] }}</td>
					<td>{{ $value['jenis_kelamin'] }}</td>
					<td>{{ $value['id_prodi'] }}</td>
					<td>{{ $value['id_kls'] }}</td>
					
					<td>
						<span class="btn btn-group">
							<a href="/mahasiswa/edit/{{$value['id']}}" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i>&nbsp;Ubah</a>
							<a href="/mahasiswa/show/{{$value['id']}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
	{!! $mahasiswa->render() !!}
</div>	