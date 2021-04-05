@extends('layout.index')
@section('content')
@php
$header = ['Foto','Menu','Price','Deskripsi','Action'];
$no = 1;
@endphp
<section class="section-margin">
<table class="table">
	<thead>
		<tr>
      @foreach($header as $jdl)
      <th>{{ $jdl }}</th>
      @endforeach
    </tr>
  </thead>
  <tbody>
    @foreach($pesanan as $menu)
    <tr>
     <td>{{ $menu->foto }}</td>
     <td>{{ $menu->nama }}</td>
     <td>{{ number_format($menu->harga) }}</td>
     <td>{{ $menu->keterangan }}</td>
     <td>     
      <a href="/transaksi">tambah</a>
    </td>
</tr>
@endforeach
</tbody>
</table>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <i class="fas fa-shopping-bag">Bayar Sekarang</i>
</button>
<br>

 <div class="row">
      @foreach($pesanan as $menu)
      <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
        <form action="{{url('transaksi/addproduk', $menu->id)}}" method="POST">
          @csrf
          
        </form>
        <div class="chef-card">
          @if(!empty($menu->foto))
          <img src="{{asset('img/menucake')}}/{{ $menu->foto}}" width="100%" />
          @else
          <img src="{{asset('img')}}/nopoto.png" width="50%">
          @endif
          <div class="chef-footer">
            <h4>{{ $menu->nama }}</h4>
            <br/>
                <p class="card-text text-center">Rp. {{ number_format($menu->harga,2,',','.') }}
                  </p>
          </div>

          <div class="chef-overlay">
            <ul class="social-icons">
              <li><i>{{ $menu->nama }}</i></a></li>
              
            </ul>
            
          </div>
        </div>
        
      </div>
    </br>

    

    @endforeach
  </div>
  <br/>
  <div class="row">
    
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Jumlah Pesanan <input type="text" name="" value="">
        Jumlah Pesanan <input type="text" name="" value="">
        Jumlah Pesanan <input type="text" name="" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" href="/transaksi">Bayar</button>
      </div>
    </div>
  </div>
</div>
</section>
@endsection