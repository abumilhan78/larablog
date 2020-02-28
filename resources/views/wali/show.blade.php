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
					<form action="{{route('wali.store')}}" method="POST">
						@csrf
						<div class="form-group">
							<label>Nama Wali</label>
                        <input type="text" value="{{$wali->nama}}" name="nama" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Mahasiswa</label>
                        <input type="text" value="{{$wali->mahasiswa->nama}}" name="dosen" class="form-control" readonly>
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
