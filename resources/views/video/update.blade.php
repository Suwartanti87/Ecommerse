@extends('layout.index')
@section('content')
@foreach($data as $vid)
<div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Tambah Data</h1>
                  </div>
                  
                  <form class="user" method="POST" action="{{route('vid.update', $vid->id)}}">
                  	@csrf
                    @method('PUT')
                    <div class="form-group row">
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" id="link" name="link" placeholder="link" value="{{$vid->link}}">
                    </div>
                    <div class="form-group col-lg-6">
                      <div>
                        <label>File Lama</label>
                        <div>{{$vid->nama}}</div>
                      </div>
                      <input type="file" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama File" value="{{$vid->nama}}">
                    </div>
                  
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Input Judul" value="{{$vid->judul}}">
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="testarea" class="form-control form-control-user" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="{{$vid->deskripsi}}">
                    </div>
                  
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