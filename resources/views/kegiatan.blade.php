@extends("template.userTemplate")

@section('title', "List Kegiatan")

@section("content")
@push("cssTambahan")
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
@endpush

@section('content')
<div class="row">
@foreach ($kegiatans as $kegiatan)
<div class="col-md-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body d-flex flex-column">
          {{-- <p>{{ $kegiatan->keterangan }}</p> --}}
          <center>
            <h4 class="card-title mb-3 ">{{ $kegiatan->judul }}</h4>
          </center>
            <div class="wrapper align-self-center">
                <img src=" {{ asset('storage/foto/kegiatan') }}/{{ $kegiatan->gambar }} " alt="" class="card-img" style="width: 12em">
            </div>
            <div class="wrapper mt-auto">
                <div class="row">
                    <button href="" class="btn btn-primary col-md-12 mt-3" data-toggle="modal" data-target="#modal{{ $kegiatan->id }}">Detail</button>
                    <div class="col-md-2"></div>
                    {{-- <button href="" class="btn btn-success col-md-5" data-toggle="modal" data-target="#modalPesan{{ $produk->id }}">Pesan</button> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
@foreach ($kegiatans as $kegiatan)
<div class="modal fade" id="modal{{ $kegiatan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">{{ $kegiatan->judul }}</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <img class="col-md-5" src="{{ asset('storage/foto/kegiatan') }}/{{ $kegiatan->gambar }}" alt="" width="40%"> <br>
        <p class="col-md-7">
          {{ $kegiatan->keterangan }}
        </p>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
@endforeach

@endsection