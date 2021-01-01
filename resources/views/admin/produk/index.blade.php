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
                <div class="wrapper">
                    <h4 class="card-title mb-0">{{ $produk->nama_produk }}}</h4>
                    <p>{{ $produk->keterangan }}</p>
                    <img src=" {{ asset('storage/foto/produk') }}/{{ $produk->gambar }} " alt="" class="card-img" style="width: 10em">
                </div>
                <div class="wrapper">
                    <br>
                    <a href="" class="btn btn-success">Detail</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection