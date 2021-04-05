@extends('layout.index')
@section('content')
@php
@endphp
<section class="section-margin">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Daftar Menu</h4>
        <h2>Menu Makanan Diet</h2>
      </div>
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
              <h4>{{ $menu->nama }}</h4>
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
<div class="container-fluid">
</div>
@endsection