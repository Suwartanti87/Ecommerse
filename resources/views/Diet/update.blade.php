@extends('layout.index')
@section('content')
@foreach($data as $diet)
<div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Tambah Data</h1>
                  </div>
                  
                  <form class="user" method="POST" action="{{route('MenuDiet.update',$diet->id)}}">
                  	@csrf
                    @method('PUT')
                    <div class="form-group row">
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" id="idmenu" name="idmenu" placeholder="Input Kode" value="{{ $diet->idmenu}}">
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" id="kode" name="kode" placeholder="Input Kode" value="{{ $diet->kode}}">
                    </div>
                  
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" name="nama" id="nama" placeholder="Input Nama Makanan" value="{{ $diet->nama}}">
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" id="foto" name="foto"  value="{{ $diet->foto}}">
                    </div>
                  
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-lg-12">
                      <input type="text" class="form-control form-control-user" name="keterangan" id="keterangan" value="{{ $diet->keterangan}}">
                    </div>
                    
                  
                    </div>
                    <center>
                    <button type="submit" class="btn btn-info">Simpan</button>
                    </center>
                    
                  </form>
                  
            </div>
          
        </div>
    @endforeach


@endsection