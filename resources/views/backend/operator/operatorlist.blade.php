@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<span class="pull-center">
					<a href="{{route('operators.create')}}" data-target="#exampleModalCenteraddBus" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
						<i class="glyphicon glyphicon-log-in">Add New Operator</i>
					</a>
				</span>
				<br><br>
				<div class="card">
					<div class="card-header-primary  " style="background-color: #4287f5; color: white;">
						<div class="m-3" >
						<h3 class="card-title">Operators List</h3>
						<h4 class="card-title float-right">Today is :{{date('d-m-Y',time())}}</h4>
							<p class="card-category">Here iis a subtitle for this table</p>
						</div>

					</div>
					<div class="card-body">
						<div class="table-responsive">
							
							<table class="table">
								<thead class="text-primary">
									<th>ID</th>
									<th>Bus Operator</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Created Date</th>
									<th>Actions</th>
								</thead>
								<tbody>
									@foreach($operators as $data)
									<tr>
									<td>1</td>
									<td><a data-toggle="modal" data-target="#exampleModalCenterViewOperator{{ $data->id}}" data-toggle="tooltip">{{$data->operator_name}}</a></td>
									<td>{{ $data->operator_email }}</td>
									<td>{{ $data->operator_phone }}</td>
									<td>{{ $data->created_at }}
									</td>
									<td>
									<a href="{{route('operators.edit',$data->id)}}" class="btn btn-warning">edit</a>	
									<form method="post" action="{{route('operators.destroy',$data->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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