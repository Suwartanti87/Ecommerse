@extends('layout.index')
@section('content')
@php
$data = App\Video::All();
$no = 1;
@endphp
<div class="container-fluid">
	<div class="row">
			@foreach ($data as $video)
			<div class="col-md-12 auto">
            <div class="col-lg-12">

              <!-- Default Card Example -->
              <div class="card mb-2">
                
                <div class="card-body">
                	@if (! empty($video->nama))
						<div class="row">
							<div class="col-md-6">
							<center>
							<video width="320" height="240"  controls>
						  	<source src="{{ asset('video/'.$video->nama) }}" type="video/mp4" width="auto">
							  	Your browser does not support HTML5 video.
							</video>
						</center>
					</div>
						<div class="col-sm-6"><br/><br/>
							{{ $video->nama }}
						 <a href="{{ $video->link }}" target="blank">klik disini</a>
						 			
						</div>
					</div>
					@else
						<video src="{{asset('video')}}/nopoto.png" width="10%"></video>
					@endif
                	 

                  

                </div>
              </div>
          </div>
         </div>
          @endforeach
</div>



<!-- <div class="container-fluid">
	
		<div class="row">
			<div class="card shadow">
				
				<div class="card-header">
					@foreach ($data as $video)
					@if (! empty($video->nama))
						<div>
							<video controls>
						  	<source src="{{ asset('video/'.$video->nama) }}" type="video/mp4" width="400%">
							  	Your browser does not support HTML5 video.
							</video>
						</div>
						<p>{{ $video->nama }}
						 <a href="{{ $video->link }}" target="blank">klik disini</a>			
						</p>
					@else
						<video src="{{asset('video')}}/nopoto.png" width="10%"></video>
					@endif
				</div>
				<div class="card-body">
					<p>{{ $video->judul }}</p>
					<p>{{ $video->deskripsi }}</p>
				</div>
				@endforeach
			</div>
		</div>
	
</div> -->

@endsection