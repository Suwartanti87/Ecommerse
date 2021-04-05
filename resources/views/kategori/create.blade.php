<div class="card o-hidden border-0 shadow-lg my-5">
     <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Form Pegawai</h1>
              </div>
               <form class="user" method="POST" action="{{ route('kategori.store') }}" enctype="multipart/form-data">
                @csrf
                <div>
                	<label>Kode Kategori</label>
                	<input type="text" name="idjenis">
                </div>
                <div>
                	<label>Nama Kategori</label>
                	<input type="text" name="kategori">
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
            	</form>
        	</div>
          </div>
    	</div>
    </div>
</div>