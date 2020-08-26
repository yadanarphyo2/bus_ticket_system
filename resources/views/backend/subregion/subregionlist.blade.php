@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<span class="pull-center">
				<a href="{{route('subregions.create')}}" type="button" class="btn btn-sm btn-primary">
					<i class="glyphicon glyphicon-log-in">Add New SubRegion</i>
				</a>
			</span>
			<br><br>
			<div class="card">
				<div class="card-header-primary  " style="background-color: #4287f5; color: white;">
					<div class="m-3" >
						<h3 class="card-title">SubRegion List</h3>
						<h4 class="card-title float-right">Today is :{{date('d-m-Y',time())}}</h4>
						<p class="card-category">City you want to go</p>
					</div>

				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Region</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@php $i=1 ;@endphp
							@foreach($subregions as $subregion)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$subregion->subregion_name}}</td>
								<td>{{$subregion->region->region_name}}</td>
								<td>
									<a href="{{route('subregions.edit',$subregion->id)}}" class="btn btn-warning">Edit</a>

									<form method="post" action="{{route('subregions.destroy',$subregion->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
										@csrf
										@method('DELETE')
										<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
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
</div>
@endsection

