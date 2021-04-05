<div class="card o-hidden border-0 shadow-lg my-5">
     <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Ubah Foods</h1>
              </div>
               <form class="user" method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                @csrf
                <div>
                  @php
                  $teg = App\Kategori::All();
                  @endphp
                	<label>Kode Kategori</label>
                  <select name="idmenu" class="form-control" id="exampleFormControlSelect1" >
                        <option value="">Pilih Kode Kategori</option>
                        @foreach($teg as $row)
                        <option value="{{$row->idjenis}}">{{$row->kategori}}</option>
                        @endforeach
                      </select>

                	
                </div>
                <div>
                  <label>Kode Makanan</label>
                  <input type="text" name="kode">
                </div>
                <div>
                	<label>Nama Menu Makanan</label>
                	<input type="text" name="nama">
                </div>
                <div>
                  <label>Price</label>
                  <input type="text" name="harga">
                </div>
                <div>
                  <label>Foto</label>
                  

                  <input name="foto" type="file" placeholder="">

                </div>
                <div>
                  <label>Deskripsi</label>
                  <input type="text" name="keterangan">
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
            	</form>
        	</div>
          </div>
    	</div>
    </div>
</div>