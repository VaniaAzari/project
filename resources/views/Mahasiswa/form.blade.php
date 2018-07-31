@extends('layouts.layouts2')

@section('content')
	<section class="content">
		<div class="row ">
			<div class="col-12">
				<form class="form-horizontal" method="POST" action="/mahasiswa/{{ $action }}{{($action!='simpan')? '/'.$mahasiswa['id'] : ''}}">
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
							<label class="col-sm-4 control-label">NIM</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="username" placeholder="NIM Mahasiswa" value="{{ ($action!='simpan') ? $mahasiswa['username'] : '' }}">
								<input type="hidden" class="form-control" name="id" value="{{ ($action!='simpan') ? $mahasiswa['id'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Nama Mahasiswa</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa" value="{{ ($action!='simpan') ? $mahasiswa['nama'] : '' }}">
							</div>
						</div>
						
						 <div class="form-group">
						 	<label class="col-sm-4 control-label">Jenis Kelamin</label>
							<div class="col-sm-8">
                 						<select name="jenis_kelamin" class="form-control" >
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
             		  </div>
          		</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Prodi</label>
							<div class="col-sm-8">
								<select name="id_prodi" class="form-control" >
    								  	<option value="">Pilih Prodi</option>
   									 @foreach($prodi as $value)
    									 <option>{{$value->nama_prodi}}</option>
  									  @endforeach
 									 </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Kelas</label>
							<div class="col-sm-8">
    					<select name="id_kls" class="form-control" >
    								  	<option value="">Pilih Kelas</option>
   									 @foreach($items as $value)
    									 <option>{{$value->nama_kelas}}</option>
  									  @endforeach
 									 </select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-4 control-label">Password</label>
							<div class="col-sm-8">
									<input type="password" class="form-control" name="password" placeholder="Password" value="{{ ($action!='simpan') ? $mahasiswa['password'] : '' }}">
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