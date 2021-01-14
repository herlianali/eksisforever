@extends("template.adminTemplate")

@section("title", "Edit Kegiatan")

@push("cssTambahan")
  {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"> --}}
@endpush

@section("content")
<div class="col-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Kegiatan</h4>
        <p class="card-description"> Edit kegiatan yang ada di desa </p>
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
        <form class="forms-sample" method="POST" action=" {{ route('kegiatan.update', $kegiatans->id) }} " enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" value="{{ $kegiatans->judul }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
            <div class="col-sm-9">
              <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan Produk">{{ $kegiatans->keterangan }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="tanggal" placeholder="Masukkan Jumlah Produk" name="tanggal" value="{{ $kegiatans->tanggal }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
            <div class="col-sm-9">
              <input type="file" class="form-control-file" name="gambar" placeholder="Masukkan Tanggal Agenda">
            </div>
          </div>
          <button type="submit" class="btn btn-success mr-2">Kirim</button>
        </form>

      </div>
    </div>
</div>
@endsection

@push("jsTambahan")
  {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $('.datepicker').datepicker();
  </script> --}}
@endpush
