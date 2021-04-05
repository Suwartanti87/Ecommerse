<div class="card o-hidden border-0 shadow-lg my-5">
     <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Food</h1>
              </div>
              @foreach($menu as $menu)
               <form class="user" method="POST" action="{{ route('menu.update', $menu->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                  <label>Nomor</label>
                  <input type="text" name="id" value="{{ $menu->id }}">
                </div>

                <div>
                  <label>ID MENU</label>
                  <input type="text" name="idmenu" value="{{ $menu->idmenu }}">
                </div>
                <div>
                  <label>Kode Makanan</label>
                  <input type="text" name="kode" value="{{ $menu->kode }}">
                </div>
                <div>
                  <label>Nama Menu Makanan</label>
                  <input type="text" name="nama" value="{{ $menu->nama }}">
                </div>
                <div>
                  <label>Price</label>
                  <input type="text" name="harga" value="{{ $menu->harga }}">
                </div>
                <div>


                  <label style="color: black">Foto</label>
  <div class="form-group custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" class="form-control" name="foto" value="{{ $menu->foto }}" placeholder="{{ $menu->foto }}">
    
    <div class="invalid-feedback">File Lama : {{$menu->foto}}</div>
  </div>
                </div>
                <div>
                  <label>Deskripsi</label>
                  <input type="text" name="keterangan" value="{{ $menu->keterangan }}">
                </div>
                <button type="submit" class="btn btn-info">Update</button>
            	</form>
              @endforeach
        	</div>
          </div>
    	</div>
    </div>
</div>