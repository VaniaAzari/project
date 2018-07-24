	
				@foreach($tugasmahasiswa as $value)

						<div class="col-md-14 col-sm-14">
                    		<div class="panel panel-primary">
                       		 <div class="panel-heading">
                          		 <h4>{{ $value->id_matkul }}</h4>
                       		 </div>
									             <div class="panel-body">
                                  <h6><b>TO: {{ $value->id_kelas }}</b></h6>
                           				 <h5>{!! $value->konten !!}</h5>
            							       

                                                
           								           <a href="/tugasmahasiswa/detail/{{$value['id']}}">
												                <button type="button" class="btn btn-info">Detail
													               
											                 	</button>
										                  </a>
                                       <a href="/tugasmahasiswa/edit/{{$value['id']}}">
                                        <button type="button" class="btn btn-primary">Upload
                                          
                                        </button>
                                      </a>
                        		</div>
                             <div class="panel-footer">
                           <h6>Due {{ $value->created_at }}</h6>
                        </div>
                        		
                    </div>
                </div>
				@endforeach
						
            						
            						
		