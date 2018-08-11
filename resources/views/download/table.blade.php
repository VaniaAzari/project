				@foreach($downloads as $value)
						<div class="col-md-12 col-sm-12">
                    		<div class="panel panel-primary">
                       		 <div class="panel-heading">
                          		 <h4>{{ $value->file_title }}</h4>
                               <h6> Dosen: {{ $value->dosen->nama }} </h6>
                               <h6> {!! $value->created_at->format('d/M/Y')!!} </h6>
                       		        </div>
									             <div class="panel-body">
                           				<h5>{!! $value->konten !!}</h5>
                                  <span class="glyphicon glyphicon-file  text-warning" ></span> &nbsp;<b>{{ $value->file_name }}</b>
                                  <br>
            						        	
                            <a href="{{ url('uploads/file/'.$value->file_name) }}" download="{{$value->file_name}}">
                              <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-download"></span>&nbsp;Download                              
                              </button>
                              </a>
                        		</div>
                        		 <div class="panel-footer">
                           <h6>{{ $value->matakuliah->nama_matkul }} | {{ $value->kelas->nama_kelas }}  </h6> 
                        </div>
                    </div>
                </div>
				@endforeach
						
            						
            						
		        
             
                        
                        
    