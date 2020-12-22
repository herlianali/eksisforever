@extends("template.adminTemplate")

@section("title", "Admin Agenda")

@push("cssTambahan")
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
@endpush

@section("content")
	<h3>Agenda Karangtaruna</h3>
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
					<h4 class="card-title" style="padding-top: 15px;">Management Agenda Karangtaruna</h4>
					<a class="btn btn-primary btn-icons btn-rounded align-top" href="{{ route('agenda.create') }}">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				<br>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Tema Agenda</th>
							<th>Tanggal Posting</th>
							<th>Isi Agenda</th>
							<th>Author</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($agendas as $agenda)
							
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $agenda->tema_agenda }}</td>
							<td>{{ $agenda->tanggal_posting }}</td>
							<td>{{ $agenda->isi_agenda}}</td>
							<td>{{ $agenda->author }}</td>
							<td>
								<form action=" {{ route('agenda.destroy', $agenda->id_agenda) }} " method="POST">
									<a class="btn btn-primary" href=" {{ route('agenda.edit', $agenda->id_agenda) }} ">Edit</a>
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger" >Hapus</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{!! $agendas->links() !!}
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