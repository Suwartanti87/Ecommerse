@extends('layout.index')
@section('content')
@php
$header = ['No', 'Kode','Kategori','Action'];
$ar_kategori = App\Kategori::All();
$kategori = App\DietKategori::All();
$no = 1;
@endphp



<!-- <table>
	<thead>
		<tr>
		@foreach($header as $jdl)
		<th>{{ $jdl }}</th>
		@endforeach
		</tr>
	</thead>
	<tbody>
		@foreach($ar_kategori as $kateg)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $kateg->idjenis }}</td>
			<td>{{ $kateg->kategori }}</td>
			<td>
				
				<form method="POST" action="{{ route('kategori.destroy', $kateg->id) }}">
				<a href="{{ route('kategori.show', $kateg->idjenis)}}" class="btn btn-dark btn-sm"><i class="fas fa-address-card">See</i></a>
				<a href="{{ route('kategori.edit', $kateg->id)}}">
              	<i class="fas fa-pencil-alt">Update</i>
             	</a>
             	@csrf
             	@method('DELETE')
             	<button type="submit" class="btn btn-link" onclick="return confirm('Yakin Mau Di Hapus?')">
                <i class="fas fa-trash-alt"></i>
                </button>
          		</form>
			</td>

		</tr>
@endforeach
	</tbody> -->


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

               <h4><a href="{{ route('kategori.show', $kateg->idjenis)}}">{{ $kateg->kategori }}</a></h4>
               <h3 class="price-tag">{{ $kateg->idjenis }}</h3>
			 
              </div>
              

             
            </div>
          </div>
        </div>
         @endforeach
      </div>
      <br/><br/>
     <div class="section-intro mb-75px">
        <h4 class="intro-title">Food Menu</h4>
        <h2>Kategori Menu Diet</h2>
      </div>
     
      <div class="row">

        @foreach($kategori as $kat)
        <div class="col-lg-6">

          
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">

               <h4><a href="{{ route('KategorimenuDiet.show', $kat->idkategori)}}">{{ $kat->kategori }}</a></h4>
               <h3 class="price-tag">{{ $kat->idkategori }}</h3>
       
              </div>
             
              </form>
            </div>
          </div>
        </div>
         @endforeach
      </div>

    </div>
    
</section>
  @endsection
