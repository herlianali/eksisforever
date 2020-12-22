@extends("template.adminTemplate")

@section("title", "Input User")

@section("cssTambahan")
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
@endsection

@section("content")
<div class="col-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input User</h4>
        <p class="card-description"> User baru karang taruna </p>
        <form class="forms-sample">
          <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="password" placeholder="Masukkan Password" name="password">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input class="form-control" id="email" placeholder="Masukkan email" name="email"></input>
            </div>
          </div>
          <div class="form-group row">
            <label for="no_telp" class="col-sm-3 col-form-label">No_telp</label>
            <div class="col-sm-9">
              <input class="form-control" id="no_telp" placeholder="Masukkan No_telp" name="no_telp"></input>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <textarea class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="level" class="col-sm-3 col-form-label">Level</label>
            <div class="col-sm-9">
              <select class="form-control" id="level" name="level">
                <option>--Pilih Level User--</option>
                <option>Admin</option>
                <option>User</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="namaL" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
              <input class="form-control" id="namaL" placeholder="Masukkan Nama Lengkap" name="namaL"></input>
            </div>
          </div>
          

          <button type="submit" class="btn btn-success mr-2">Kirim</button>
        </form>

      </div>
    </div>
</div>
@endsection

@push("jsTambahan")
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $('.datepicker').datepicker();
  </script>
@endpush
