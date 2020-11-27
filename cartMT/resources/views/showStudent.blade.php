@extends('layouts.app')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success')}}
</div>
@endif

<div class="container">
	<div class="row">
		<table class="table table-hover table-striped">
			<thead>
				<tr class="thead-dark">
					<th>Student ID</th>
					<th>Student Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Photo</th>
					<th>Phone number</th>
				</tr>
			</thead>
			<tbody>
				@foreach($students as $student)
				<tr>
					<td>{{$student->id}}</td>

					<td style="max-width:300px">
						<h6>{{$student->stuName}}</h6>
					</td>
					<td> 
						{{$student->stuEmail}}
					</td>
					<td>{{$student->stuAddress}}</td>
					<td><img src="{{ asset('images/') }}/{{$student->stuPhoto}}" alt="" width="50"></td>
					<td>{{$student->stuPhone}}</td>

				</tr>
				@endforeach


			</tbody>
		</table>

		<div class="text-center">

		</div>

	</div>
</div>

@endsection