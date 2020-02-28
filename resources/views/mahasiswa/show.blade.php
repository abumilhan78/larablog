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
					<form action="{{route('mahasiswa.store')}}" method="POST">
						@csrf
						<div class="form-group">
							<label>Nama Mahasiswa</label>
                        <input type="text" value="{{$mahasiswa->nama}}" name="nama" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nomor Induk Mahasiswa</label>
							<input type="text" value="{{$mahasiswa->nim}}" name="nim" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Dosen Pembimbing</label>
							<input type="text" value="{{$mahasiswa->dosen->nama}}" name="dosen" class="form-control" readonly>
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
