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


<script>
    $( document ).ready(function() {
		var dt = $('#dataTable').DataTable({
            orderCellsTop: true,
            responsive: true,
            processing: true,
            serverSide: true,
            searching: true,
            autoWidth: false,
            ajax: {
				url :'{{ route('kuis.group.list') }}',
				data: { '_token' : '{{csrf_token() }}'},
				type: 'POST',
            },
            columns: [
                { data: 'DT_Row_Index', orderable: false, searchable: false, "width": "30px"},
                { data: 'name', name: 'name' },
                { data: 'kelas', name: 'kelas' },
                { data: 'matakuliah', name: 'matakuliah' },
                { data: 'action', name: 'action', "width" : "100px" },
            ]
		});

		$('table#dataTable tbody').on( 'click', 'td>a', function (e) {
            var mode = $(this).attr("data-mode");
            var parent = $(this).parent().get( 0 );
            var parent1 = $(parent).parent().get( 0 );
            var row = dt.row(parent1);
            var data = row.data();

            if($(this).hasClass('delete')) {
                swal({
                    title: "Konfirmasi",
                    text: "Apakah Anda Yakin Untuk Menghapus Data Ini ?",
                    buttons: {
                        cancel: "Tidak",
                        execute: "Iya",
                    }
                }).then((value) => {
                    value == 'execute' ? deleteData(data.id, $('input[name="_token"]').val(), "{{ route('kuis.group.delete') }}")
                    : null
                });
                
            }else if($(this).hasClass('edit')) {
                $('#id_edit').val(data.id);
                $('#nama_edit').val(data.name);
                $('#id_kelas_edit').val(data.id_kelas);
                $('#id_matakuliah_edit').val(data.id_matakuliah);
                $('#editModal').modal('show');
            }
        });
		
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
					$('#dataTable').DataTable().ajax.reload();
				},
				error: function(err)
				{
					$('#addModal').modal('hide')
					$.smkAlert({
						text: err.message,
						type: 'danger'
					});
					$('#dataTable').DataTable().ajax.reload();
				}
			});
		});
		
		$('.btn-update').click(function() {
            $.ajax({
				headers: {
					'X-CSRF-Token': $('input[name="_token"]').val()
				},
				url: "{{ route('kuis.group.update') }}", 
				type: "PUT",             
				data: $('#formEdit').serialize(),        
				success: function(result)  
				{
					$('#formEdit')[0].reset();
					$('#editModal').modal('hide')
					$.smkAlert({
						text: result.message,
						type: 'success'
					});
					$('#dataTable').DataTable().ajax.reload();
				},
				error: function(err)
				{
					$('#editModal').modal('hide')
					$.smkAlert({
						text: err.message,
						type: 'danger'
					});
					$('#dataTable').DataTable().ajax.reload();
				}
			});
        });
	});

	function deleteData(id, token, url) {
        $.ajax({
            method: 'DELETE',
            headers: {
                'X-CSRF-Token': token
            },
            url: url,
            dataType: 'JSON',
            cache: false,
            data: {id: id},
            success: function(result) {
                $('#dataTable').DataTable().ajax.reload();
                $.smkAlert({
                    text: result.message,
                    type: 'success'
                });
            },
            error: function(err)
            {
                $.smkAlert({
                    text: err.message,
                    type: 'danger'
                });
            }
        });
	}
	
</script>
@endsection