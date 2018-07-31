<div class="table-responsive">
	<table id="tabel_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Matakuliah</th>	
				<th>Kelas</th>
				<th>Dosen</th>	
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@if(!empty($matakuliahkelas))
				@foreach($matakuliahkelas as $key => $value)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $value['id_matkul'] }}</td>
						<td>{{ $value['id_kelas'] }}</td>
						<td>{{ $value['dosen_id'] }}</td>

						
					
					<td>
						<span class="btn btn-group">
							<a href="/matakuliahkelas/edit/{{$value['id']}}" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i>&nbsp;Ubah</a>
							<a href="/matakuliahkelas/show/{{$value['id']}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
	{!! $matakuliahkelas->render() !!}
</div>	