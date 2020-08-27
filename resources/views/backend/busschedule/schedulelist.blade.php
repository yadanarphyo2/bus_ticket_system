@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<span class="pull-center">
					<a href="{{route('schedules.create')}}" type="button" class="btn btn-sm btn-primary">
						<i class="glyphicon glyphicon-log-in">Add New Schedule</i>
					</a>
				</span>
				<br><br>
				<div class="card">
					<div class="card-header-primary" style="background-color: #4287f5; color: white;">
						<div class="m-3" >
						<h3 class="card-title">Schedule List</h3>
						<h4 class="card-title float-right">Today is :{{date('d-m-Y',time())}}</h4>
							<p class="card-category">You can see Schedules list here</p>
						</div>

					</div>
					<div class="card-body">
						<div class="table-responsive">
							
							
							<table class="table">
								<thead class="text-primary">
									<th>No</th>
									<th>Bus name</th>
									<th>operator name</th>

									<th>Region Name</th>
									<th>Sub region Name</th>
									<th>Start time</th>
									<th>Arrival time</th>
									<th>Price</th>
									<th>Type of bus</th>
									<th>Actions</th>
								</thead>
								<tbody>
									@php $i=1; @endphp
									@foreach($busschedules as $busschedule)
									<tr>
									<td>{{$i++}}</td>
									<td>{{ $busschedule->bus->operator->operator_name}}</td>
									<td>{{ $busschedule->operator->operator_name}}</td>
									<td>{{ $busschedule->region->region_name}}</td>
									<td>{{ $busschedule->subregion->subregion_name}}</td>
									<td>{{ $busschedule->start_time}}</td>
									<td>{{ $busschedule->arrive_time}}</td>
									<td>{{ $busschedule->price}}</td>
									<td>{{$busschedule->description}}
									</td>
									<td>
									<a href="{{route('schedules.edit',$busschedule->id)}}" class="btn btn-warning">edit</a>	
									<form method="post" action="{{route('schedules.destroy',$busschedule->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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