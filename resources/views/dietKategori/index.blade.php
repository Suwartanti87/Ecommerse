@extends('layout.index')
@section('content')
@php 
$data  = App\DietKategori::All();
@endphp
<div class="container-fluid">

  <!-- Page Heading -->
  
  

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h1 class="m-0 font-weight-bold text-primary">Kategori Menu Diet</h1>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <center>
          <a href="{{ url('/KategorimenuDiet/create') }}" class="btn btn-dark btn-sm">
            <i class="fas fa-plus"></i>&nbsp;Add</a>
          </center>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="bg-warning">
                <th>Kode</th>
                <th>Kategori</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach($data as $diet)
              <tr>
                <td>{{ $diet->idkategori }}</td>
                <td>{{ $diet->kategori }}</td>
                <td>
                  <form method="POST" action="{{ route('KategorimenuDiet.destroy', $diet->id) }}">
                    
                    <a href="{{ route('KategorimenuDiet.edit', $diet->id)}}">
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
            ` 
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection