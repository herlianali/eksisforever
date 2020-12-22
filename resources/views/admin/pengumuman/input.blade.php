@extends("template.adminTemplate")

@section("title", "Input Pengumuman KT")

@section("cssTambahan")
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
@endsection

@section("content")
<div class="col-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Agenda KT</h4>
        <p class="card-description"> Agenda baru yang akan dilakukan karang taruna </p>
        <form class="forms-sample">
          <div class="form-group row">
            <label for="temaAgenda" class="col-sm-3 col-form-label">Tema Agenda</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="temaAgenda" placeholder="Masukkan tema agenda" name="temaAgenda">
            </div>
          </div>
          <div class="form-group row">
            <label for="isiAgenda" class="col-sm-3 col-form-label">Isi Agenda</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="isiAgenda" placeholder="Masukkan isi agenda" name="isiAgenda">
            </div>
          </div>
          <div class="form-group row">
            <label for="author" class="col-sm-3 col-form-label">Author</label>
            <div class="col-sm-9">
              <input class="form-control" id="author" placeholder="Masukkan Nama Author" name="author"></input>
            </div>
          </div>
          <div class="form-group row">
            <label for="author" class="col-sm-3 col-form-label">Tanggal posting</label>
            <div class="col-sm-9">
              <input type="text" class="form-control date" id="tanggal" data-provide="datepicker" name="tanggal" placeholder="Masukkan Tanggal Agenda">
            </div>
          </div>

          <button type="submit" class="btn btn-success mr-2">Kirim</button>
        </form>

      </div>
    </div>
</div>
@endsection

@section("jsTambahan")
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $('.datepicker').datepicker();
  </script>
@endsection
