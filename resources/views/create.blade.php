@extends('layouts.app')

@section('content')
	<div class="container mt-5">
		<a href="{{ url('/')}}">
			<button class="btn btn-info">Back</button>
		</a>
		<form method="post" action="{{ url('store')}}">
			@csrf
			<div class="row mt-4">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputAddress">Patient name</label>
						<select class="form-control" name="patient_type_id" required>
							<option value="" disabled selected> Select Patient name</option>
							@foreach($patient_types as $type)
								<option value="{{ $type->id }}">{{ ucwords($type->name) }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="inputAddress">Checkup-Purpose</label>
						<input type="text" class="form-control" name="checkup"  placeholder="checkup" required>
					</div>
					<div class="form-group">
						<label for="inputAddress">Phone</label>
						<input type="number" class="form-control" name="number"  placeholder="number" required>
					</div>
					<div class="form-group">
						<label for="inputAddress">Age</label>
						<input type="text" class="form-control" name="age" placeholder="Enter Age" required> 
					</div>
					
					<label class="col-md-2">Gender:</label>
					<div class="col-md-6">
     <input type="radio" name="gender" value="male"> Male<br>
     <input type="radio" name="gender" value="female"> Female<br>              

					</div>
					<div class="form-group">
						<label for="inputAddress">Location</label>
						<input type="text" class="form-control" name="location"  placeholder="Location" required>
					</div>
					<div class="form-group">
            	      <label for="">BirthDate</label>
                    <input type="date" name ="date" class="form-control" required>
           			</div>
					<div class="form-group">
						<label for="inputAddress">Payment</label>
						<input type="text" class="form-control" name="payment"  placeholder="Enter Payment" required>

					</div>
					<button type="submit" class="btn btn-success float-right">Submit</button>
				</div>
			</div>  
		</form>
	</div>
@endsection
