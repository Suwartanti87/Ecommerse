@extends('layout.index')
@section('content')

<section class="section-margin">
  <div class="container">
    <div class="section-intro mb-75px">
      <h4 class="intro-title">Tips & Trik</h4>
      <h2>Ala Ubsy Bitsy</h2>
    </div>
    
    <div class="row">
      @foreach($data as $tips)
      <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
        <div class="chef-card">
          @if(!empty($tips->foto))
          <img src="{{asset('img')}}/{{ $tips->foto}}" width="100%" />
          @else
          <img src="{{asset('img')}}/nopoto.png" width="50%">
          @endif
          <div class="chef-footer">
            <h4><a href="{{ route('tips-and-trik.show', $tips->id)}}">{{ $tips->nama }}</a></h4>        

          </div>

          <div class="chef-overlay">
            <ul class="social-icons">

              <li><i>{{ $tips->nama }}</i></a></li>

            </ul>
          </div>
        </div>

      </div>
    </br>



    @endforeach
  </div>
  <br/>
</div>
</section>

@endsection