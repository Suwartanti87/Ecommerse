@extends('layout.index')
@section('content')
<div class="container">
  <div class="section-intro mb-75px">
    <h4 class="intro-title">Daftar Menu</h4>
    <h2>Menu Makanan</h2>
  </div>
  <br/>
  <div class="row">
    @foreach($data as $menu)
    <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
      <div class="chef-card">
        @if(!empty($menu->foto))
        <img src="{{asset('img')}}/{{ $menu->foto}}" width="100%" />
        @else
        <img src="{{asset('img')}}/nopoto.png" width="50%">
        @endif
        <div class="chef-footer">
          <h4><a href="{{ route('MenuDiet.show', $menu->id)}}">{{ $menu->nama }}</a></h4>
        </div>
        <div class="chef-overlay">
          <ul class="social-icons">
            <li><i>{{ $menu->keterangan }}</i></a></li>
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