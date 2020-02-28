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
					<form action="{{route('wali.update', $wali->id )}}" method="POST">
                        @csrf
                        @method('patch')
						<div class="form-group">
							<label>Nama Mahasiswa</label>
                        <input type="text" value="{{$wali->nama}}" name="nama" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Dosen Pembimbing</label>
							<select class="custom-select" name="id_mahasiswa">
								@foreach($mhs as $key)
							  <option value="{{$key->id}}" {{$key->id == $wali->id_mahasiswa ? "selected":""}}>{{$key->nama}}</option>
							  	@endforeach
							</select>
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
