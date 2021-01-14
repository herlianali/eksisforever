@extends("template.userTemplate")

@section('title', "List Produk")

@section("content")
@push("cssTambahan")
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
@endpush

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if ($message = Session::get('successD'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="row">
@foreach ($produks as $produk)
<div class="col-md-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body d-flex flex-column">
            <h4 class="card-title mb-0">{{ $produk->nama_produk }}</h4>
            <p>{{ $produk->keterangan }}</p>
            <div class="wrapper align-self-center">
                <img src=" {{ asset('storage/foto/produk') }}/{{ $produk->gambar }} " alt="" class="card-img" style="width: 12em">
            </div>
            <div class="wrapper mt-auto">
                <div class="row">
                    <button href="" class="btn btn-primary col-md-5" data-toggle="modal" data-target="#modal{{ $produk->id }}">Detail</button>
                    <div class="col-md-2"></div>
                    <button href="" class="btn btn-success col-md-5" data-toggle="modal" data-target="#modalPesan{{ $produk->id }}">Pesan</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
@foreach ($produks as $duks)
<div class="modal fade" id="modal{{ $duks->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">{{ $duks->nama_produk }}</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <img src="{{ asset('storage/foto/produk') }}/{{ $duks->gambar }}" alt="" width="80%"> <br>
        Harga Produk = Rp.{{ $duks->harga }} <br>
        Jumlah Produk yang tersedia = {{ $duks->jumlah }} <br>
        Keterangan Barang : {{ $duks->keterangan }} <br>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
    </div>
  </div>
</div>
</div>
@endforeach
@foreach ($produks as $duks)
<div class="modal fade" id="modalPesan{{ $duks->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <form class="forms-sample" method="POST" action=" {{ url('produk') }} ">
            @csrf
            <div class="form-group row">
              <label for="namaProduk" class="col-sm-3 col-form-label">Nama Produk</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="namaProduk" name="namaProduk" value="{{ $duks->nama_produk }}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="harga" class="col-sm-3 col-form-label">Harga Satuan</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $duks->harga }}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Produk" name="jumlah">
              </div>
            </div>
            <div class="form-group row">
                <label for="pembeli" class="col-sm-3 col-form-label">Nama Pembeli</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="pembeli" placeholder="Masukkan Nama Pembeli" name="pembeli">
                </div>
            </div>
            <div class="form-group row">
                <label for="Alamat" class="col-sm-3 col-form-label">Alamat Pembeli</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="Alamat" placeholder="Masukkan Nama Pembeli" name="alamat">
                </div>
            </div>
            <div class="form-group row">
                <label for="Notelp" class="col-sm-3 col-form-label">Nomor Telp</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="Notelp" placeholder="Masukkan Nama Pembeli" name="noTelp">
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success mr-2">Kirim</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
    </form>
  </div>
</div>
</div>
@endforeach
@endsection