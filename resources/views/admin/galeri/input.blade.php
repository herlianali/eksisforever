@extends('template.adminTemplate')
@section('title', 'Galeri')
@section('content')
<div class="col-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Gambar</h4>
        <p class="card-description"> Gambar baru yang ada di desa </p>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif
        <form class="forms-sample" method="POST" action=" {{ route('galeri.store') }} " enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="namaKegiatan" class="col-sm-3 col-form-label">Nama Kegiatan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="namaKegiatan" placeholder="Masukkan Nama Kegiatan" name="nama_kegiatan">
            </div>
          </div>
          <div class="form-group row">
            <label for="namaAlbum" class="col-sm-3 col-form-label">Nama Album</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="namaAlbum" placeholder="Masukkan Nama Album" name="nama_album">
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
            <div class="col-sm-9">
              <input type="file" class="form-control-file" name="nama_file" placeholder="Masukkan Tanggal Agenda">
            </div>
          </div>
          <button type="submit" class="btn btn-success mr-2">Kirim</button>
        </form>

      </div>
    </div>
</div>
@endsection