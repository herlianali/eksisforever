@extends("template.adminTemplate")

@section("title", "Admin user Agenda")

@push("cssTambahan")
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
@endpush

@section("content")
	<h3>User Karangtaruna</h3>
	@if ($message = Session::get('success'))
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
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
					<h4 class="card-title" style="padding-top: 15px;">Management User Karangtaruna</h4>
					<a class="btn btn-primary btn-icons btn-rounded align-top" href="{{ route('user.create') }}">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				<br>
				<table class="table table-bordered table-hover table-responsive ">
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Password</th>
							<th>Email</th>
							<th>No_telp</th>
							<th>Alamat</th>
							<th>Level</th>
							<th>Nama Lengkap</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $user->username }}</td>
							<td>*********</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->no_telp }}</td>
							<td>{{ $user->alamat }}</td>
							<td>{{ $user->level }}</td>
							<td>{{ $user->nama_lengkap }}</td>
							<td>
								<form action=" {{ route('user.destroy', $user->id) }} " method="POST">
									<a class="btn btn-primary" href=" {{ route('user.edit', $user->id) }} ">Edit</a>
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger" >Hapus</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{!! $users->links() !!}
			</div>
		</div>
	</div>
@endsection
