@extends('layouts/app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card text-white bg-info">
				<div class="card-header">
					Ubah Data Hobi
				</div>
				<div class="card-body">
					<form action="{{route('hobi.update', $hobi->id)}}" method="POST">
						{{-- <input type="hidden" name="_method" value="PUT"> --}}
						@method('patch')
						@csrf
						<div class="form-group">
							<label>Nama Hobi</label>
							<input type="text" name="hobi" value="{{$hobi->hobi}}" class="form-control" required>
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