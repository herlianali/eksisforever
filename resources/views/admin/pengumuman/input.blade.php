@extends("template.adminTemplate")

@section("title", "Input Pengumuman KT")

@push("cssTambahan")
  {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"> --}}
@endpush

@section("content")
<div class="col-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Pengumuman KT</h4>
        <p class="card-description"> Pengumuman baru yang akan dilakukan karang taruna </p>
        <form class="forms-sample" method="POST" action=" {{ route('pengumuman.store') }} ">
          @csrf
          <div class="form-group row">
            <label for="judulPengumuman" class="col-sm-3 col-form-label">Judul Pengumuman</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="judulPengumuman" placeholder="Masukkan Judul Pengumuman" name="judulPengumuman">
            </div>
          </div>
          <div class="form-group row">
            <label for="isiPengumuman" class="col-sm-3 col-form-label">Isi Pengumuman</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="isiPengumuman" placeholder="Masukkan isi Pengumuman" name="isiPengumuman">
            </div>
          </div>
          <div class="form-group row">
            <label for="author" class="col-sm-3 col-form-label">Author</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="author" placeholder="Masukkan nama author" name="author">
            </div>
          </div>
          <div class="form-group row">
            <label for="pengumuman" class="col-sm-3 col-form-label">Tanggal posting</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal Pengumuman">
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
