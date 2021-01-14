@extends("template.adminTemplate")

@section("title", "Input Pengumuman KT")

@push("cssTambahan")
  {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"> --}}
@endpush

@section("content")
<div class="col-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Produk</h4>
        <p class="card-description"> Edit produk yang ada di desa </p>
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
        <form class="forms-sample" method="POST" action=" {{ route('produk.update', $produk->id) }} " enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group row">
            <label for="namaProduk" class="col-sm-3 col-form-label">Nama Produk</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="namaProduk" placeholder="Masukkan Nama Produk" name="namaProduk" value="{{ $produk->nama_produk }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Produk" name="harga" value="{{ $produk->harga }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Produk" name="jumlah" value="{{ $produk->jumlah }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
            <div class="col-sm-9">
              <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan Produk">{{ $produk->keterangan }}</textarea>
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

@endpush
