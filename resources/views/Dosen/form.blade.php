@extends('layouts.layouts2')

@section('content')
	<section class="content">
		<div class="row ">
			<div class="col-12">
				@if($errors->any())
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
					<li><span>{{ $err }}</span></li>
					@endforeach
				</div>
				@endif
				
				<form class="form-horizontal" method="POST" action="/dosen/{{ $action }}{{($action!='simpan')? '/'.$dosen['id'] : ''}}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="modal-header">
						<h3>Form {{ ucwords($action) }}</h3>
					</div>
					<div class="modal-body">
						@if($action=="delete")
							<div class="alert alert-danger">
	  							<strong>Perhatian!</strong> Menekan tombol delete akan menghapus data.
							</div>
						@endif
						<div class="form-group">
							<label class="col-sm-4 control-label">NIP</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="username" placeholder="NIP Dosen" value="{{ ($action!='simpan') ? $dosen['username'] : '' }}">
								<input type="hidden" class="form-control" name="id" value="{{ ($action!='simpan') ? $dosen['id'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Nama Dosen</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="nama" placeholder="Nama Dosen" value="{{ ($action!='simpan') ? $dosen['nama'] : '' }}">
							</div>
						</div>
						<div class="form-group">
                                            <label class="col-sm-4 control-label">Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                <select name="jenis_kelamin" class="form-control">
                                                    <option value="">Pilih</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                </select>
                                            </div>
                                        </div>
                        <div class="form-group">
							<label class="col-sm-4 control-label">Email</label>
							<div class="col-sm-8">
									<input type="text" class="form-control" name="email" placeholder="Email" value="{{ ($action!='simpan') ? $dosen['email'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Password</label>
							<div class="col-sm-8">
									<input type="password" class="form-control" name="password" placeholder="Password" value="{{ ($action!='simpan') ? $dosen['password'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Foto</label>
							<div class="col-sm-8">
								<input type="file" class="form-control" name="file_name"  value="{{ ($action!='simpan') ? $dosen['file_name'] : '' }}">
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
						<button type="submit" class="btn {{($action!='delete')? 'btn-success' : 'btn-danger' }} pull-right" >{{ ucwords($action) }}</button>
					</div>
				</form>

			</div>
		</div>	
	</section>
@endsection