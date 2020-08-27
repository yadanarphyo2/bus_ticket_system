@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<span class="pull-center">
					<a href="{{route('buses.create')}}" type="button" class="btn btn-sm btn-primary">
						<i class="glyphicon glyphicon-log-in">Add New Bus</i>
					</a>
				</span>
				<br><br>
				<div class="card">
					<div class="card-header-primary  " style="background-color: #4287f5; color: white;">
						<div class="m-3" >
						<h3 class="card-title">Buses List</h3>
						<h4 class="card-title float-right">Today is :{{date('d-m-Y',time())}}</h4>
							<p class="card-category">You can see bus list here</p>
						</div>

					</div>
					<div class="card-body">
						<div class="table-responsive">
							
							
							<table class="table">
								<thead class="text-primary">
									<th>No</th>
									<th>Operator id</th>
									<th>Total Seats</th>
									<th>Actions</th>
								</thead>
								<tbody>
									@foreach($buses as $bus)
									<tr>
									<td>1</td>
									<td>{{ $bus->operator->operator_name }}</td>
									<td>{{$bus->total_seats}}
									<td>{{$bus->description}}
									</td>
									<td>
									<a href="{{route('buses.edit',$bus->id)}}" class="btn btn-warning">edit</a>	
									<form method="post" action="{{route('buses.destroy',$bus->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
										@csrf
										@method('DELETE')
										<input type="submit" name="submit" value="Delete" class="btn btn-sm btn-danger">
									</form>
									</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
@endsection