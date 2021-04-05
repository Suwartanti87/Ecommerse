<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">

    <div class="col-lg-12">
      <div class="p-5">
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">Edit Kategori</h1>
        </div>
        @foreach($tips as $kateg)
        <form class="user" method="POST" action="{{ route('KategoriTipsTrik.update',$kateg->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="form-group col-lg-6">
              <input type="text" class="form-control form-control-user" id="idkategori"  value="{{ $kateg->idkategori }}" name="idkategori">
            </div>
            <div class="form-group col-lg-6">
              <input type="text" class="form-control form-control-user" id="kategori" value="{{ $kateg->kategori }}" name="kategori">
            </div>
          </div>
          <center>
            <button type="submit" class="btn btn-warning">Update</button>
          </center>
        </form>
        @endforeach
      </div>          
    </div>
  </div>
</div>