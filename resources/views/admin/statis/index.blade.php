@extends('template.adminTemplate')
@section('title', "Data Statis")
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
            <h4 class="card-title" style="padding-top: 15px;">Management Agenda Karangtaruna</h4>
            <button class="btn btn-success btn-icons align-top" data-toggle="modal" data-target="#exampleModal">
                <i class="far fa-edit"></i>
            </button>
            </div>
            <br>
            <table class="table table-bordered table-responsive">
                <tr>
                    <th>Nama Desa</th>
                    <td>{{ $statis->nama_desa }}</td>
                </tr>
                <tr>
                    <th>About Web</th>
                    <td>{{ $statis->about_web }}</td>
                </tr>
                <tr>
                    <th>Contact Person</th>
                    <td>{{ $statis->contact_person }}</td>
                </tr>    
                <tr>
                    <th>Email</th>
                    <td>{{ $statis->email }}</td>
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                </tr>
            </table>
        </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" method="POST" action=" {{ route('statis.update', 1) }} ">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                          <label for="namaDesa" class="col-sm-3 col-form-label">Nama Desa</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="namaDesa" value="{{ $statis->nama_desa }}" name="nama_desa">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="aboutWeb" class="col-sm-3 col-form-label">About Web</label>
                          <div class="col-sm-9">
                            <textarea name="about_web" class="form-control" id="aboutWeb" cols="30" rows="10">{{ $statis->about_web }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="contacPerson" class="col-sm-3 col-form-label">Contact Person</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="contacPerson" value="{{ $statis->contact_person }}" name="contact_person">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="email" value="{{ $statis->email }}" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Ubah Data</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection