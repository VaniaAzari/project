@extends('layouts.layouts3')

@section('content')
<section class="content">
	<h4 class="page-head-line">Kuis</h4>
	<div class="row">
		<div class="col-12">
			<div class="panel panel-default">
				<div class="panel-heading text-right">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
				</div>
				<br>
							
				<div class="panel-body" >
					<table class="table table-bordered">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Mata Kuliah</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>	
</section>
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Group Kuis Baru</h4>
      </div>
	  <form method="POST" action="#" id="formAdd">
      	<div class="modal-body">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="name" placeholder="Nama Group kuis">
			</div>
			<div class="form-group">
				<select name="id_kelas" class="form-control">
					<option value="" disabled selected>Silakan Pilih Kelas</option>
					@foreach($kelasList as $kelas)
						<option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<select name="id_matakuliah" class="form-control">
					<option value="" disabled selected>Silakan Pilih Mata Kuliah</option>
					@foreach($matkulList as $matkul)
						<option value="{{$matkul->id}}">{{$matkul->nama_matkul}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-success pull-right btn-save" >Simpan</button>
		</div>
	</form>
    </div>
  </div>
</div>

<script>
    $( document ).ready(function() {
		$('.btn-save').click(function() {
            $.ajax({
				headers: {
					'X-CSRF-Token': $('input[name="_token"]').val()
				},
				url: "{{ route('kuis.group.save') }}", 
				type: "POST",             
				data: $('#formAdd').serialize(),        
				success: function(result)  
				{
					$('#formAdd')[0].reset();
					$('#addModal').modal('hide')
					$.smkAlert({
						text: result.message,
						type: 'success'
					});
					// $('#dataTable').DataTable().ajax.reload();
				},
				error: function(err)
				{
					$('#modal-dialog').modal('hide')
					$('#page-loader').addClass('d-none');
					$.smkAlert({
						text: err.message,
						type: 'danger'
					});
					// $('#dataTable').DataTable().ajax.reload();
				}
			});
        });
	});
</script>
@endsection