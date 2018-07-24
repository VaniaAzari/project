				
				@foreach($downloads as $value)

						<div class="col-md-12 col-sm-12">
                    		<div class="panel panel-primary">
                       		 <div class="panel-heading">
                          		 <h4>{{ $value->file_title }}</h4>
                       		        </div>
									             <div class="panel-body">
                           				<h5>{!! $value->konten !!}</h5>
                                  <span class="glyphicon glyphicon-file  text-warning" ></span> &nbsp;<b>{{ $value->file_name }}</b>
                                  <br>
            						        	
           									<a href="download/{{$value->file_name}}" download="{{$value->file_name}}">
												      <button type="button" class="btn btn-primary">Download 
													     <i class="glyphicon glyphicon-download"></i>
												      </button>
										        	</a>
                        		</div>
                        		 <div class="panel-footer">
                           <h6>{{ $value->id_matkuls }}</h6>
                        </div>
                    </div>
                </div>
				@endforeach
						
            						
            						
		