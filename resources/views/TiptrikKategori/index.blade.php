@extends('layout.index')
@section('content')
@php
$data = App\TiptrikKategori::All();
$no = 1;
@endphp
<section class="section-margin">
  <div class="container">
    <div class="section-intro mb-75px">
    <h4 class="intro-title">Tips & Trik</h4>
    <h2>Tips & Trik Mudah</h2>
    </div> 
   <div class="row">
      @foreach($data as $kat)
      <div class="col-lg-6">       
        <div class="media align-items-center food-card">
        <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
        <div class="media-body">
          <div class="d-flex justify-content-between food-card-title">
           <h4><a href="{{ route('KategoriTipsTrik.show', $kat->idkategori)}}">{{ $kat->kategori }}</a></h4>
           <h3 class="price-tag">{{ $kat->idkategori }}</h3>      
         </div>      
        </div>
        </div>
      </div>
      @endforeach
   </div>
   </div>
</div>
</section>

@endsection