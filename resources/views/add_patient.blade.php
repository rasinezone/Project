@extends('layouts.app')

@section('content')
	<div class="container mt-2">
		<a href="{{ url('/')}}">
			<button class="btn btn-info">Back</button>
		</a>
		<form method="post" action="{{ url('add_patient')}}">
			@csrf
			<div class="row mt-4">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputAddress">Patient Name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter name" required> 
					</div>
					<button type="submit" class="btn btn-success float-right">Submit</button>
				</div>
			</div>  
		</form>
	</div>
@endsection