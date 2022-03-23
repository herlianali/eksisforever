@extends('template.adminTemplate')

@section('title', "Kegiatan")
@section('content')
    
@push("cssTambahan")
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
<style>
    .btn:focus, .btn:active, button:focus, button:active {
        outline: none !important;
        box-shadow: none !important;
    }

    #image-gallery .modal-footer{
        display: block;
    }

    .thumb{
        margin-top: 15px;
        margin-bottom: 15px;
    }
</style>
@endpush

@section("content")
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
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
<div class="col-lg-12 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title" style="padding-top: 15px;">Management Kegiatan Karangtaruna</h4>
            <a class="btn btn-primary btn-icons btn-rounded align-top" href="{{ route('kegiatan.create') }}">
                <i class="fa fa-plus"></i>
            </a>
        </div>
        <br>
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>judul</th>
                    <th>Keterangan</th>
                    <th>tanggal</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kegiatans as $kegiatan)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $kegiatan->judul }}</td>
                    <td>{{ $kegiatan->keterangan }}</td>
                    <td>{{ $kegiatan->tanggal }}</td>
                    <td>
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="{{ asset('storage/foto/kegiatan') }}/{{ $kegiatan->gambar }}" data-target="#image-gallery">
                            <img class="img-thumbnail" src="{{ asset('storage/foto/kegiatan') }}/{{ $kegiatan->gambar }}" alt="Gambar Kegiatan">
                        </a>
                    </td>
                    <td>
                        <form action=" {{ route('kegiatan.destroy', $kegiatan->id) }} " method="POST">
                            <a class="btn btn-primary" href=" {{ route('kegiatan.edit', $kegiatan->id) }} ">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $kegiatans->links() !!}
    </div>
</div>
</div>
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="image-gallery-title"></h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
            </button>
        </div>
        <div class="modal-body">
            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
            </button>

            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
            </button>
        </div>
    </div>
</div>
</div>
@endsection
@push('jsTambahan')
<script src="{{ asset('assets/js/image.js') }}"></script>
<script type="text/javascript">
    $(".alert").show();
    setTimeout(function(){ $('.alert').hide(); }, 2000);
</script>
@endpush