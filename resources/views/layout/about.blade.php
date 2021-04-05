@extends('layout.index')
@section('content')
@php
$header = ['No', 'Kode','Kategori','Action'];
$ar_kategori = App\Kategori::All();
$ar_menu = App\menu::All();
$no = 1;
@endphp
<section class="cta-area text-center">
    <div class="container">
      
    <h><p>About Us</p></h>
    <h1><P>MY KITCHEN</P></h1>
      <p><i>adalah sebuah resto yang menghidangkan berbagai jenis menu makanan, dimulai dari appetizer,main corse, dessert dan berbagai drink.
Anda bisa langsung datang ketempat kami..

Ayoo ajakk teman, sahabat, kerabat, dan keluarga kalian untuk menikmati sajian kami.</i></p>
         
    </div>
  </section>
  
    

      
        
  
  
@endsection