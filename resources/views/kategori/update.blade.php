<div class="card o-hidden border-0 shadow-lg my-5">
     <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Kategori</h1>
              </div>
              @foreach($kategori as $kateg)
               <form class="user" method="POST" action="{{ route('kategori.update', $kateg->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                	<label>Kode Kategori</label>
                	<input type="text" name="idjenis" value="{{ $kateg->idjenis }}">
                </div>
                <div>
                	<label>Nama Kategori</label>
                	<input type="text" name="kategori" value="{{ $kateg->kategori }}">
                </div>
                <button type="submit" class="btn btn-info">Update</button>
            	</form>
              @endforeach
        	</div>
          </div>
    	</div>
    </div>
</div>