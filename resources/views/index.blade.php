@extends('layouts.app')

@section('content')
	<thead class="thead-light">
	
		<a href="{{ url('create_patient')}}">
			<button class="btn btn-info">Add name</button>
		</a>
		<a href="{{ url('create')}}">
			<button class="btn btn-info">Add Patient</button>
		</a>
		<table class="table mt-1">
			<thead class="thead-light">
		
				<tr>
				<th>#</th>
				<th>Patient name</th>
				<th>Checkup-Purpose</th>
				<th>Phone number</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Location</th>
				<th>BirthDate</th>
				<th>Payment</th>
				<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($patients as $patient)
					<tr>
						<th scope="row">{{ ++$i }}</th>
						<th>{{ $patient->patient_type->name }}</th>
						<th>{{$patient->checkup}}</th>
						<th>{{$patient->number}}</th>
						<th>{{ $patient->age }}</th>
						<th>{{ $patient->gender }}</th>
						<th>{{ $patient->location }}</th>
						<th>{{ $patient->date}}</th>
                        <th>{{ $patient->payment}}</th>
                        <th>{{ $patient->status }}</th> 
						
						<td>
							<a href="{{ url('edit',$patient->id)}}">
								<button class="btn btn-success">Edit</button></a>
							<a href="{{ url('delete',$patient->id)}}">
								<button class="btn btn-danger">Delete</button>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection