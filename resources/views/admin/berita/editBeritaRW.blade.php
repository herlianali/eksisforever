@extends("template.adminTemplate")

@section("title", "Edit Berita KT")

@push("cssTambahan")
  <script src="{{ asset('assets/js/ckeditor.js') }}"></script>
@endpush

@section("content")
<div class="col-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Berita RW</h4>
        <p class="card-description"> Tulis berita yang baru - baru ini terjadi di RW </p>
        @foreach ($beritas as $berita)
        <form class="forms-sample" action=" {{ route('beritaRW.update', $berita->id_berita) }} " method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <input type="hidden" value="berita rw" name="jenisBerita">
          <input type="hidden" value="aktif" name="status">
          <div class="form-group row">
            <label for="temaAgenda" class="col-sm-3 col-form-label">Judul Berita</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="temaAgenda" value="{{ $berita->judul_berita }}" name="judulBerita">
            </div>
          </div>
          <div class="form-group row">
            <label for="isiBerita" class="col-sm-3 col-form-label">Isi Berita</label>
            <div class="col-sm-9">
              <textarea class="form-control" id="body" placeholder="Masukkan Isi Berita" name="isiBerita">{{ $berita->isi_berita }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
            <div class="col-sm-9">
              <input type="file" class="form-control-file" name="gambar" value="{{ $berita->gambar }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="tanggal" value="{{ $berita->tanggal_posting }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="author" class="col-sm-3 col-form-label">Author</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="author" value="{{ $berita->author }}" name="author">
            </div>
          </div>
          <button type="submit" class="btn btn-success mr-2">Kirim</button>
        </form>
        @endforeach
        
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