<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('public/lending_page/css/bootstrap.min.css') }} " integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/lending_page/css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('public/lending_page/fontawesome/css/all.css') }} ">
</head>


<body data-spy="scroll" data-target="#navbar" data-offset="72" class="position-relative">
    <header class="fixed-top page-header">
      <div class="container-fluid container-fluid-max">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
          <img src=" {{ asset('public/Logokartar.png') }} " alt="" class="navbar-brand" style="width: 45px;">
          <a class="navbar-brand" href="#home">Eksis Forever</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-lg-between" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#produk">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kegiatan">Kegiatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#galeri">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#featured-destinations">Organisasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak</a>
              </li>
            </ul>
            <div class="text-white">
              <a href="tel:1234567890" class="mr-2">
                <i class="fas fa-phone"></i>
                <div class="d-none d-xl-inline">{{ $statis->contact_person }}</div>
              </a>
              <a href="mailto:kebonagung@gmail.com">
                <i class="fas fa-envelope"></i>
                <div class="d-none d-xl-inline">{{ $statis->email }}</div>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
  
    <main>
      <section id="home" class="d-flex align-items-center position-relative vh-100 cover hero" style="background-image:url({{ asset('public/background.jpg') }});">
        <div class="container-fluid container-fluid-max">
          <div class="row">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <h1 class="text-white">Karang Taruna Desa Gambir Anom Eksis Forever</h1>
              <div class="mt-3">
                {{-- <a class="btn bg-red text-white mr-2" href="" role="button"></a> --}}
                <a class="btn bg-red text-white" href="" role="button">Produk Desa Gambir Anom</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="beranda" class="process bg-lightblue">
        <div class="container-fluid container-fluid-max">
          <div class="row text-center py-5">
            <div class="col-12 pb-4">
              <h2 class="text-red">Tentang Karang Taruna</h2>
            </div>
            <div class="px-4">
              <p>{{ $statis->about_web }}</p>
            </div>
          </div>
        </div>
      </section>

      <section id="produk" class="process">
        <div class="container-fluid container-fluid-max 
        ">
          <div class="row text-center py-5">
            <div class="col-12 pb-4">
              <h2 class="text-red">Produk</h2>
            </div>
            <div class="d-flex justify-content-center container">
              @foreach ($produks as $produk)
                  
              <div class="card col-12 col-sm-5 col-lg-3 m-2 p-1" style="width: 50%">
                <img src="{{ asset('public/storage/foto/produk') }}/{{ $produk->gambar}}" class="card-img-top" alt="" style="width: 100%; height: 15vw; object-fit: cover;">
                <div class="card-body">
                  <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                  <p class="card-text">Harga : {{ $produk->harga }}</p>
                  <p class="card-text">Jumlah Ketersediaan : {{ $produk->jumlah }}</p>
                  <a href="#" class="btn bg-red text-white">Cek Detail</a>
                </div>
              </div>
              @endforeach

            </div>
            <div class="col-12 pt-3">
              <a class="btn bg-red text-white" target="_blank" href="" role="button">Lebih Banyak Produk →</a>
            </div>
          </div>
        </div>
      </section>
  
      <section id="kegiatan" class="kegiatan bg-lightblue">
        <div class="row no-gutters">
          <div class="col-12 col-md-6 d-flex align-items-center order-1 order-md-0">
            <div class="p-15">
              <h3>{{ $kegiatan1->judul }}</h3>
              <p>{{ $kegiatan1->keterangan }}</p>
              <a class="btn bg-red text-white" target="_blank" href="" role="button">Detail Kegiatan →</a>
            </div>
          </div>
          <div class="col-12 col-md-6 order-0 order-md-1">
            <div class="vh-100 cover" style="background-image: url({{ asset('public/storage/foto/kegiatan') }}/{{ $kegiatan1->gambar }});"></div>
          </div>
          <div class="col-12 col-md-6 order-2">
            <div class="vh-100 cover" style="background-image: url({{ asset('public/storage/foto/kegiatan') }}/{{ $kegiatan2->gambar }});"></div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center order-3">
            <div class="p-15">
              <h3>{{ $kegiatan2->judul }}</h3>
              <p>{{ $kegiatan2->keterangan }}</p>
              <a class="btn bg-red text-white" target="_blank" href="https://en.wikipedia.org/wiki/Neuschwanstein_Castle" role="button">Detail Kegiatan →</a>
            </div>
          </div>
        </div>
        <div class="row p-4">
          <div class="col text-center">
            <a class="btn bg-red text-white" href="" role="button">Lebih Banyak Kegiatan ↓</a>
          </div>
        </div>
      </section>
  
      <section id="galeri" class="popular-destinations py-5">
        <div class="container-fluid container-fluid-max">
          <div class="row">
            <div class="col-12">
              <h2 class="pb-3 text-red">Galeri Karang Taruna</h2>
            </div>
            @foreach ($galeris as $galeri)                
              <div class="col-12 col-sm-6 col-md-4">
                <a href="" class="text-white">
                  <figure class="position-relative overflow-hidden">
                    <img class="img-fluid" src="{{ asset('public/storage/foto/galeri') }}/{{ $galeri->nama_file }}" alt="Vienna">
                    <figcaption class="d-flex align-items-center justify-content-center position-absolute">
                      <h3>{{ $galeri->nama_kegiatan }}</h3>
                    </figcaption>
                  </figure>
                </a>
              </div>
            @endforeach

          </div>
          <div class="row">
            <div class="col text-center">
              <a class="btn bg-red text-white" href="" role="button">Lihat Lebih Banyak Foto Karang Taruna ↓</a>
            </div>
          </div>
  
        </div>
      </section>

      <section id="organisasi" class="bg-lightblue">
        <div class="container-fluid container-fluid-max">
          <div class="row text-center py-5">
            <div class="col-12 pb-4">
              <h2 class="text-red">Struktur Organisasi</h2>
            </div>


          </div>
        </div>
      </section>
  
      <section id="request-quote" class="py-5 request-quote ">
        <div class="container-fluid container-fluid-max">
          <div class="row justify-content-center">
            <div class="col-12 col-md-auto py-3 text-center">
              <h2 class="mb-0 text-red">Tunggu apalagi segera pesan produk dari desa kami</h2>
              <p class="mb-0 h4 text-red font-weight-normal">Dapatkan sekarang!</p>
            </div>
            <div class="col-12 col-md-auto d-flex justify-content-center align-items-center">
              <a class="btn bg-red text-white font-weight-bold" href="" role="button">
                Pesan Atau Ingin Bertanya Klik
                <i class="ml-1 fas fa-hand-point-up"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>
    
    <footer class="py-5 page-footer">
      <div class="container-fluid container-fluid-max">
        <div class="row">
          <div class="col-12 col-md-6 footer-child copyright">
            Karangtaruna Desa Kebon anom © 2018 All Rights Reserved
          </div>
          <div class="col-12 col-md-6 footer-child footer-links">
            <a href="" class="mr-3">Privacy Policy</a>
            <a href="">FAQ</a>
            <div>
              <small>Made with <i class="fas fa-heart text-red"></i> by <a href="http://eksisforever.com/" target="_blank">Karangtaruna Desa Kebon anom</a>
              </small>
            </div>
          </div>
        </div>
      </div>
    </footer>
  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="{{ asset('public/lending_page/js/style.js') }}"></script>
    <script src="{{ asset('public/lending_page/js/bootstrap.bundle.min.js') }}" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>