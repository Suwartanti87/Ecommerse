@extends('layout.index')
@section('content')

<div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Tambah Data</h1>
                  </div>
                  <form class="user" method="POST" action="{{route('tips-and-trik.store')}}">
                  	@csrf
                    <div class="form-group row">
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" id="idkategori" name="idkategori" placeholder="Input Kode">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Input Nama Makanan">
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" id="foto" name="foto" placeholder="Input foto">
                    </div>
                  
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-lg-12">
                      <input type="text" class="form-control form-control-user" name="keterangan" id="keterangan" aria-describedby="emailHelp" placeholder="Input Keterangan">
                    </div>
                    
                  
                    </div>
                    <center>
                    <button type="submit" class="btn btn-info">Simpan</button>
                    </center>
                    
                  </form>
                  
                  
          
            </div>
          
        </div>

@endsection