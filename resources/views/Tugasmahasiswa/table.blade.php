	
        @foreach($tugasmahasiswa as $value)
						<div class="col-md-12 col-sm-12">
                    		<div class="panel panel-primary">
                       		 <div class="panel-heading">
                          		 <h3>{{ $value->matakuliah->nama_matkul }}</h3>
                                 <h5>Dosen: {{ $value->dosen->nama }}</h5>
                                  <h6>Kelas: {{ $value->kelas->nama_kelas }}</h6>
                       		 </div>
									             <div class="panel-body">
                                  <h5>{!! $value->konten !!}</h5> 
                                     <a href="{{ url('uploads/tugas/'.$value->file_name) }}" download="{{$value->file_name}}">  <h5>{{ $value->file_name }}</h5></a>       							       
        
           								           <a href="/tugasmahasiswa/detail/{{$value['id']}}/{{$value['tanggal_masuk']}}/{{$value['matakuliah_id']}}/{{$value['kelas_id']}}">
												                <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tasks"></span> &nbsp;Detail													               
											                 	</button>
										                  </a>
                                       <a href="/tugasmahasiswa/edit/{{$value['id']}}/{{$value['matakuliah_id']}}">
                                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-upload"></span> &nbsp; Upload                                          
                                        </button>
                                      </a>
                        		</div>
                             <div class="panel-footer">
                           <h6>Due {{ $value->created_at->format('d/M/Y') }}</h6>
                        </div>                        		
                    </div>
                </div>
				@endforeach
        
						
            						
            						
		