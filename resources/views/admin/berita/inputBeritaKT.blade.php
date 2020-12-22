@extends("template.adminTemplate")

@section("title", "Input Berita KT")

@section("cssTambahan")
  <script src="{{ asset('assets/js/ckeditor.js') }}"></script>
@endsection

@section("content")
<div class="col-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Berita KT</h4>
        <p class="card-description"> Tulis berita yang baru - baru ini terjadi di karang taruna </p>
        <form class="forms-sample">
          <div class="form-group row">
            <label for="temaAgenda" class="col-sm-3 col-form-label">Tema Agenda</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="temaAgenda" placeholder="Masukkan tema agenda">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Isi Berita</label>
            <div class="col-sm-9">
              <textarea class="form-control" id="body" placeholder="Enter the Description" name="body"></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-success mr-2">Kirim</button>
        </form>

      </div>
    </div>
</div>
@endsection


@push("jsTambahan")
  <script>
    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
    console.error( error );
    } );
  </script>
@endpush