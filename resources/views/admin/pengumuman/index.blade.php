@extends("template.adminTemplate")

@section("title", "Admin Agenda")

@section("cssTambahan")
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
@endsection

@section("content")
	<h3>Pengumuman Karangtaruna</h3>
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between">
					<h4 class="card-title" style="padding-top: 15px;">Management Pengumuman Karangtaruna</h4>
					<a class="btn btn-primary btn-icons btn-rounded align-top" href="{{ url('admin/inputPengumuman') }}">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				<br>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Judul Pengumuman</th>
							<th>Isi Pengumuman</th>
							<th>Tanggal Posting</th>
							<th>Author</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
