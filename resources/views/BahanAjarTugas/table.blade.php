<div class="table-responsive">
	<table id="tabel_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Bahan Ajar</th>
				<th>Dosen</th>
				<th>Action</th>
			
			</tr>
		</thead>
		<tbody>
		
				@foreach($matakuliahkelas as $key => $value)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $value->matakuliah->nama_matkul }}</td>
					<td>{{ $value->dosen->nama }}</td>
					<td>
				 	<a href="/tugasmahasiswa/{{$value['matakuliah_id']}}">
					<button type="button" class="btn btn-info"><span class="glyphicon glyphicon-open"></span> &nbsp; Open</button></a>									               
											                 	
				</td>						                  
			</tr>
				@endforeach
		
		</tbody>
	
	</table>
	
</div>	