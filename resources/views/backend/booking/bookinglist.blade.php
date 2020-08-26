@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header-primary" style="background-color: #4287f5; color: white;">
						<div class="m-3" >
						<h3 class="card-title">Booking List</h3>
						<h4 class="card-title float-right">Today is :{{date('d-m-Y',time())}}</h4>
							<p class="card-category">You can see Booking list here</p>
						</div>

					</div>
					<div class="card-body">
						<div class="table-responsive">
							
							
							<table class="table">
								<thead class="text-primary">
									<th>No</th>
									<th>Bus name</th>
									<th>Customer Name</th>
									<th>Seat amount</th>
									<th>Seat no</th>
									<th>Depature date</th>
								</thead>
								<tbody>
									@php $i=1; @endphp
									@foreach($bookings as $booking)
									<tr>
									<td>{{$i++}}</td>
									<td>{{ $booking->bus->operator->operator_name}}</td>
									<td>{{ $booking->customer->customer_name}}</td>
									<td>{{ $booking->seat_amount}}</td>
									<td>{{ $booking->seat_no}}</td>
									<td>{{ $busschedule->depature_date}}</td>
									
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