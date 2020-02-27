@extends('layouts/app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card text-white bg-info">
				<div class="card-header">
					Show Data Hobi
				</div>
				<div class="card-body">
					<form action="{{route('dosen.store')}}" method="POST">
						@csrf
						<div class="form-group">
							<label>Nama Hobi</label>
							<input type="text" name="hobi" class="form-control" value="{{$hobi->hobi}}" readonly>
						</div>
						
						<div class="form-group">
							<a href="{{url()->previous()}}" class="btn btn-dark">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection