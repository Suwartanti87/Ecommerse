@extends('layout.index')
@section('content')

<div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Add Kategori</h1>
                  </div>
                  
                  <form class="user" method="POST" action="{{route('KategorimenuDiet.store')}}">
                  	@csrf
                    
                    <div class="form-group row">
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" id="idkategori" name="idkategori" placeholder="Kode Kategori" value="">
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control form-control-user" id="kategori" name="kategori" placeholder="Kategori" value="">
                    </div>
                  
                    </div>                  
                    </div>
                    <center>
                    <button type="submit" class="btn btn-warning">Simpan</button>
                    </center>
                    
                  </form>
                  
            </div>
          </div>
        </div>

@endsection