@extends("template.adminTemplate")

@section("title", "Input Agenda KT")

@section("cssTambahan")
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
@endsection

@section("content")
<div class="col-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Agenda KT</h4>
        <p class="card-description"> Agenda baru yang akan dilakukan karang taruna </p>
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
        @foreach ($agendas as $agenda)
        <form class="forms-sample" method="POST" action="{{ route('agenda.update', $agenda->id_agenda) }}">
          @method('PUT')
          @csrf
              
          <div class="form-group row">
            <label for="temaAgenda" class="col-sm-3 col-form-label">Tema Agenda</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="temaAgenda" value="{{$agenda->tema_agenda}}" name="temaAgenda" style="font-weight: bold">
            </div>
          </div>
          <div class="form-group row">
            <label for="isiAgenda" class="col-sm-3 col-form-label">Isi Agenda</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="isiAgenda" value="{{$agenda->isi_agenda}}" name="isiAgenda" style="font-weight: bold">
            </div>
          </div>
          <div class="form-group row">
            <label for="author" class="col-sm-3 col-form-label">Author</label>
            <div class="col-sm-9">
              <input class="form-control" id="author" value="{{$agenda->author}}" name="author" style="font-weight: bold">
            </div>
          </div>
          <div class="form-group row">
            <label for="author" class="col-sm-3 col-form-label">Tanggal posting</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="tanggal" value="{{$agenda->tanggal_posting}}" style="font-weight: bold">
            </div>
          </div>
          @endforeach

          <button type="submit" class="btn btn-success mr-2">Kirim</button>
        </form>

      </div>
    </div>
</div>
@endsection

