@extends('layouts/app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card text-white bg-info">
				<div class="card-header">
					Tambah Data Dosen
				</div>
				<div class="card-body">
					<form action="{{route('dosen.store')}}" method="POST">
						@csrf
						<div class="form-group">
							<label>Nama Dosen</label>
							<input type="text" name="nama" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nomor Induk Pegawai Dosen</label>
							<input type="text" name="nipd" class="form-control" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-dark">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection