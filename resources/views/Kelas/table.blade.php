<div class="table-responsive">
	<table id="tabel_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Kelas</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@if(!empty($kelas))
				@foreach($kelas as $key => $value)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $value['nama_kelas'] }}</td>
										
					
					<td>
						<span class="btn btn-group">
							<a href="/kelas/edit/{{$value['id']}}" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i>&nbsp;Ubah</a>
							<a href="/kelas/show/{{$value['id']}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
	{!! $kelas->render() !!}
</div>	