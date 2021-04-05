@extends('layout.index')
@section('content')
<section class="section-margin">
<div class="container">
  <div class="section-intro mb-75px">
    <h4 class="intro-title">Tips</h4>
    <h2>& Trik Ala Ubsy Bitsy</h2>
  </div>
  <br/>
  <div class="row">
    @foreach($data as $menu)
    
    <div class="row">
      <div class="col-sm-6">
         @if(!empty($menu->foto))
        <img src="{{asset('img')}}/{{ $menu->foto}}" width="100%" />
        @else
        <img src="{{asset('img')}}/nopoto.png" width="50%">
        @endif
        
      </div>
      <div class="col-sm-6">
        <h2>{{ $menu->nama }}</h2>
        <br/>
        Deskripsi : &nbsp;
        <br/>
          {{ $menu->keterangan }}
        
      </div>
      
    </div>
    
  </br>
  @endforeach
</div>
<br/>
</div>
</section>
@endsection