@extends('layout.index')
@section('content')
@php
$header = ['No', 'Kode','Menu','Price','Foto','Deskripsi','Action'];
$no = 1;
$ar_menu = App\Menu::All();
$ar_kategori = App\Kategori::All();
@endphp
<section class="hero-banner">
    <div class="hero-wrapper">
      <div class="hero-left">
        <h1 class="hero-title"><img src="img/ubsy.png" width="80%"></h1>
        <div class="d-sm-flex flex-wrap">
          
          <a class="hero-banner__video" href="https://www.youtube.com/watch?v=Dk_jUW9d9LU">Watch Video</a>          
        </div>
        
      </div>
      <div class="hero-right">
        <div class="owl-carousel owl-theme hero-carousel">
          @foreach($ar_menu as $menu)
          <div class="hero-carousel-item">
             @if(!empty($menu->foto))
            <img src="{{asset('img')}}/{{ $menu->foto}}" width="50%" />
            @else
            <img src="{{asset('img')}}/nopoto.png" width="50%">
            @endif
          </div>
          
           @endforeach
        </div>
      </div>
      <ul class="social-icons d-none d-lg-block">
        <li><a href="#"><i class="ti-facebook"></i></a></li>
        <li><a href="#"><i class="ti-twitter"></i></a></li>
        <li><a href="#"><i class="ti-instagram"></i></a></li>
      </ul>
    </div>
  </section>
    <section class="about section-margin pb-xl-70">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xl-6 mb-5 mb-md-0 pb-5 pb-md-0">
          <div class="img-styleBox">
            <div class="styleBox-border">
              <img class="styleBox-img1 img-fluid" src="img/home/about-img1.png" alt="">
            </div>
            <img class="styleBox-img2 img-fluid" src="img/home/about-img2.png" alt="">
          </div>
        </div>
        <div class="col-md-6 pl-md-5 pl-xl-0 offset-xl-1 col-xl-5">
          <div class="section-intro mb-lg-4">
            <h4 class="intro-title">About Us</h4>
            <h2><img src="img/ubsy.png" width="100%"></h2>
          </div>
          <p>Informasi seputar tips and trik<br/>
          Resep Makanan dan minuman </p>
          
        </div>
      </div>
    </div>
  </section>
  <!--================About Section End =================-->

  <!--================Featured Section Start =================-->
  <section class="section-margin mb-lg-100">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Featured Food</h4>
        <h2>Makanan Lezat dan nikmat</h2>
      </div>
      <div class="owl-carousel owl-theme featured-carousel">
        @foreach($ar_menu as $menu)
        <div class="featured-item">
          @if(!empty($menu->foto))
            <img src="{{asset('img')}}/{{ $menu->foto}}" width="50%" />
            @else
            <img src="{{asset('img')}}/nopoto.png" width="50%">
            @endif
          <div class="item-body">
            <a href="#">
              <h5>{{ $menu->idmenu }}</h5>&nbsp;
              <h3>
                {{ $menu->nama }}</h3>
            </a>
            <div class="d-flex justify-content-between">
            </div>
          </div>
        </div>
        @endforeach
      </div>
      
    </div>
    
  </section>
  <!--================Featured Section End =================-->

  <!--================Offer Section Start =================-->
  <section class="bg-lightGray section-padding">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-sm">
          <img class="card-img rounded-0" src="img/Salad.jpg" alt="">
        </div>
        <div class="col-sm">
          <div class="offer-card offer-card-position">
            <h3>Vegetarian Salad</h3>
            <h4>Healthy Menu</h4>
            <a></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Offer Section End =================-->


  <!--================Food menu section start =================-->  
  <section class="section-margin">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Food Menu</h4>
        <h2>Kategori</h2>
      </div>
      
      <div class="row">
        @foreach($ar_kategori as $kateg)
        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
               <h4><a href="/kategori_menu">{{ $kateg->kategori }}</a></h4>
               <h3 class="price-tag">{{ $kateg->idjenis }}</h3>
       
              </div>
              <p>Whales and darkness moving form cattle</p>
            </div>
          </div>
        </div>
         @endforeach
      </div>
     
    </div>
    

  </section>  
@endsection