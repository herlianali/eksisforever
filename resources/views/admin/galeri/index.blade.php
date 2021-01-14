@extends('template.adminTemplate')
@section('title', 'Galeri')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body d-flex flex-column">
                <div class="wrapper">
                    <div class="d-flex justify-content-between">
                        <h3 style="padding-top: 15px;">Semua foto desa gambir anom</h3>
                        <div style="padding-top: 10px;">
                            <a class="btn btn-primary btn-icons btn-rounded align-top" href="{{ route('galeri.create') }}">
                                <i class="fa fa-plus" style="padding-top: 2px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($galeris as $galeri)
    <div class="card col-md-3 ml-3">
        <img class="card-img-top mt-3" src=" {{ asset('storage/foto/galeri') }}/{{ $galeri->nama_file }} " alt="Card image cap">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">Nama Kegiatan : {{ $galeri->nama_kegiatan }}</h5>
            <h5 class="card-title mb-4">Nama Album : {{ $galeri->nama_album }}</h5>
            <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
                <div class="row">
                    <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-success col-md-5">
                        <i class="far fa-edit"></i>
                    </a>
                    <div class="col-md-2"></div>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger col-md-5">
                        <i class="fa fa-trash-alt"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>    
    @endforeach
</div>

@endsection