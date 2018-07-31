<div class="table-responsive">
	<table id="tabel_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Bahan Ajar</th>
				<th>Action</th>
			
			</tr>
		</thead>
		<tbody>
		
				@foreach($matakuliah as $key => $value)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $value['id_matkul'] }}</td>
					<td>
				 	<a href="/tugasmahasiswa/{{$value['id_matkul']}}">
					<button type="button" class="btn btn-info">Open</button></a>									               
											                 	
				</td>						                  
			</tr>
				@endforeach
		
		</tbody>
	
	</table>
	
</div>	