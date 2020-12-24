@extends("template.adminTemplate")

@section("title", "Admin Agenda")

@push("cssTambahan")
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
@endpush

@section("content")
	<h3>Pengumuman Karangtaruna</h3>
	@if ($message = Session::get('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ $message }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif
	@if ($message = Session::get('successD'))
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			{{ $message }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between">
					<h4 class="card-title" style="padding-top: 15px;">Management Pengumuman Karangtaruna</h4>
					<a class="btn btn-primary btn-icons btn-rounded align-top" href="{{ route('pengumuman.create') }}">
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
						@foreach ($pengumumans as $pengumuman)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $pengumuman->judul_pengumuman }}</td>
							<td>{{ $pengumuman->isi_pengumuman }}</td>
							<td>{{ $pengumuman->tanggal_posting }}</td>
							<td>{{ $pengumuman->author }}</td>
							<td>
								<form action=" {{ route('pengumuman.destroy', $pengumuman->id_pengumuman) }} " method="POST">
									<a class="btn btn-primary" href=" {{ route('pengumuman.edit', $pengumuman->id_pengumuman) }} ">Edit</a>
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger" >Hapus</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
@push('jsTambahan')
<script type="text/javascript">
	$(".alert").show();
	setTimeout(function(){ $('.alert').hide(); }, 2000);
</script>
@endpush