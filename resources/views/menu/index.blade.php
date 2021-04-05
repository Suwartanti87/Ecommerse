@extends('layout.index')
@section('content')
@php
$header = ['No', 'Kode','Menu','Price','Foto','Deskripsi','Action'];
$no = 1;
$ar_kategori = App\Kategori::All();
@endphp

<!-- <a href="{{ url('/menu/create') }}" class="btn btn-dark btn-sm">Add</a>
<table border="1">
	<thead>
		<tr>
      @foreach($header as $jdl)
      <th>{{ $jdl }}</th>
      @endforeach
    </tr>
  </thead>
  <tbody>
    @foreach($ar_menu as $menu)
    <tr>
     <td>{{ $no++ }}</td>
     <td>{{ $menu->idmenu }}</td>
     <td>{{ $menu->nama }}</td>
     <td>{{ $menu->foto }}</td>
     <td>{{ $menu->keterangan }}</td>
     <td>
      <form method="POST" action="{{ route('menu.destroy', $menu->id) }}">
        <a href="{{ route('menu.edit', $menu->id)}}">
         <i class="fas fa-pencil-alt">Update</i>
       </a>
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-link" onclick="return confirm('Yakin Mau Di Hapus?')">
        <i class="fas fa-trash-alt">Delete</i>
      </button>
    </form>
  </td>
</tr>
@endforeach
</tbody>

</table> -->

<section class="section-margin">
  <div class="container">
    <div class="section-intro mb-75px">
      <h4 class="intro-title">Daftar Menu</h4>
      <h2>Menu Makanan</h2>
    </div>
    
    
    <div class="row">
      @foreach($ar_menu as $menu)
      <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
        <div class="chef-card">
          @if(!empty($menu->foto))
          <img src="{{asset('img')}}/{{ $menu->foto}}" width="100%" />
          @else
          <img src="{{asset('img')}}/nopoto.png" width="50%">
          @endif
          <div class="chef-footer">
            <h4><a href="{{ route('menu.show', $menu->id)}}">{{ $menu->nama }}</a></h4>
            
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
</div>
</section>
@endsection