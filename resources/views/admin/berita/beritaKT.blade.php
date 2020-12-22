@extends("template.adminTemplate")

@section("title", "Berita Karang Taruna")

@section("cssTambahan")
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
@endsection

@section("content")
<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<div class="d-flex justify-content-between">
				<h4 class="card-title" style="padding-top: 15px;">Management Berita Karangtaruna</h4>
				<a class="btn btn-primary btn-icons btn-rounded align-top" href="{{ url('admin/inputBeritaKT') }}">
					<i class="fa fa-plus"></i>
				</a>
			</div>
			<br>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>no</th>
						<th>foto</th>
						<th>isi</th>
						<th>tanggal</th>
						<th>penulis</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>foto 1</td>
						<td>berita 1 tentang apa aja</td>
						<td>23 - januari 2022</td>
						<td>aliyasa</td>
						<td>
							<button class="btn btn-danger btn-sm" type="button">
								<i class="fa fa-trash-o"></i>
								Hapus
							</button>
							<button class="btn btn-success btn-sm" type="button">
								<i class="fa fa-pencil"></i>
								Edit
							</button>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>foto 2</td>
						<td>berita 2 tentang apa aja ya</td>
						<td>23 - januari 2023</td>
						<td>yasaali</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection