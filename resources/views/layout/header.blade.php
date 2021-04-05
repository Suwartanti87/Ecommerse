 @php
 $ar_kategori = App\Kategori::All();
 $data = App\DietKategori::All();
 $tips = App\TiptrikKategori::All();
 @endphp
 <header class="header_area">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container box_1620">
        <a class="navbar-brand logo_h" href="index.html"><img src="img/logusty.png" alt="" width="50%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav justify-content-end">
            <li class="nav-item active"><a class="nav-link" href="/home">Home</a></li> 
            <!-- <li class="nav-item"><a class="nav-link" href="/about">About</a></li>  -->
            <li class="nav-item"><a class="nav-link" href="/vid">Vlog</a></li> 
            <li class="nav-item"><a class="nav-link" href="/kategori">Kategori Menu</a></li>              
            <li class="nav-item submenu dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Menu</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><center><a href="/menu" class="nav-link">Daftar Menu</a></center></li>
                @foreach($ar_kategori as $kateg)
                <li class="nav-item">
                  <center><a href="{{ route('kategori.show', $kateg->idjenis)}}" class="nav-link">{{ $kateg->kategori }}</a>
                  </center>
                </li>
                @endforeach
              </ul>
              <li class="nav-item submenu dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Menu Diet</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><center><a href="/MenuDiet" class="nav-link">Daftar Menu Diet</a></center></li>
                @foreach($data as $kat)
                <li class="nav-item">
                  <center><a href="{{ route('KategorimenuDiet.show', $kat->idkategori)}}" class="nav-link">{{ $kat->kategori }}</a>
                  </center>
                </li>
                @endforeach
              </ul>
              <li class="nav-item submenu dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Tips & Trik</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><center><a href="/KategoriTipsTrik" class="nav-link">All Tips & Trik</a></center></li>
                @foreach($tips as $tip)
                <li class="nav-item">
                  <center><a href="{{ route('KategoriTipsTrik.show', $tip->idkategori)}}" class="nav-link">{{ $tip->kategori }}</a>
                  </center>
                </li>
                @endforeach
              </ul>  
              <li class="nav-item"><a class="nav-link" href="/tdee">Hitung Kalori</a></li> 
              <li class="nav-item"><a class="nav-link" href="/store">Store</a></li>           
              <!-- Authentication Links -->
                            </div> 
                          </div>
                        </nav>
                      </div>
                    </header>