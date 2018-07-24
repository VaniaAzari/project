<div class="table-responsive">
	<table id="tabel_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Judul</th>
				<th>Isi</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@if(!empty($pengumuman))
				@foreach($pengumuman as $key => $value)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $value['judul'] }}</td>
					<td>{!! $value['isi'] !!}</td>
										
					<td>
						<span class="btn btn-group">
							<a href="/pengumuman/edit/{{$value['id']}}" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i>&nbsp;Ubah</a>
							<a href="/pengumuman/show/{{$value['id']}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
	{!! $pengumuman->render() !!}
</div>	