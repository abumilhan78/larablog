@extends('layouts/app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			@if(session('message'))
				<div class="alert alert-success" role="alert">
					{{session('message')}}
				</div>
			@endif
			<div class="card">
				<div class="card-header">
					Data Hobi
					<a href="{{route('hobi.create')}}" class="float-right">Tambah Data</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-dark table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Hobi</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($hobi as $key)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$key->hobi}}</td>
									<td>
										<a href="{{route('hobi.show', $key->id)}}" class="btn btn-outline-info">Lihat</a>
										<a href="{{route('hobi.edit', $key->id)}}" class="btn btn-outline-warning">Edit</a>
										<form action="{{route('hobi.destroy', $key->id)}}" method="post" class="d-inline">
						                    @method('delete')
						                    @csrf
						                    <button type="submit" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-outline-danger">Hapus</button>
						                </form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection