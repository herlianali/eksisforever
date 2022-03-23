@extends('template.adminTemplate')

@section('title', 'Produks')

@push("cssTambahan")
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body d-flex flex-column">
                <div class="wrapper">
                    <div class="d-flex justify-content-between">
                        <h3 style="padding-top: 15px;">Tambah Produk</h3>
                        <div style="padding-top: 10px;">
                            <a class="btn btn-primary btn-icons btn-rounded align-top" href="{{ route('produk.create') }}">
                                <i class="fa fa-plus" style="padding-top: 2px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    <br>
                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $produk->id }}">Detail</a>
                        <a href="{{ route('produk.edit', $produk->id ) }}" class="btn btn-success">Edit</a>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
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
@endsection

@push('jsTambahan')
    <script type="text/javascript">
        $(".alert").show();
        setTimeout(function(){ $('.alert').hide(); }, 2000);
    </script>
@endpush