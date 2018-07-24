<div class="table-responsive">
	
	<table id="tabel_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>NIP</th>
				<th>Nama Dosen</th>	
				<th>Jenis Kelamin</th>	
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@if(!empty($dosen))
				@foreach($dosen as $key => $value)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $value['username'] }}</td>
					<td>{{ $value['nama'] }}</td>
					<td>{{ $value['jenis_kelamin'] }}</td>
					
					<td>
						<span class="btn btn-group">
							<a href="/dosen/edit/{{$value['id']}}" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i>&nbsp;Ubah</a>
							<a href="/dosen/show/{{$value['id']}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
			{!! $dosen->render() !!}
			
	</div>	
