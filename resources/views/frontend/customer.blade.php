@extends('nav')
@section('content')
  <div class="container my-4">
    <div class="row">
      <div class="col-md-6 form1">
          <div class="card border-info">
            <div class="card-header">
                        <h5 class="text-center font-weight-bold">Enter Traveller Information</h5>
                    </div>
                    <div class="card-body">
                        {{-- <form method="POST" action="{{route('customerstore')}}">
                            @csrf --}}
                          <from>
                            <div class="form-group">
                                <label><i class="fa fa-user text-info"></i> Name</label>
                                <input type="text" id="name" name="customer_name" class="form-control" placeholder="Enter Name" required="required">
                            </div>
                            
                            <div class="form-group">
                                <label><i class="fa fa-envelope text-info"></i> Email</label>
                                <input type="email" id="email" name="customer_email" class="form-control" placeholder="Enter Email" required="required">
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-phone text-info"></i> Phone</label>
                                <input type="text" name="customer_phone" id="phone" class="form-control" placeholder="09123456789" required="required">
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-comment text-info"></i> Address</label>
                                <textarea rows="3" id="address" name="customer_address" class="form-control" placeholder="Enter Your Address" required="required"></textarea>
                            </div>
                            <input type="submit" name="" class="customerajax btn btn-primary" value="send">
                        </form>
                    </div>
            </div>
      </div>
      <div class="col-md-6 form2">
          <div class="card border-info">
              <div class="card-header">
                        <h5 class="text-center font-weight-bold">Book Now</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('bookings.store')}}">
                            @csrf
                          {{-- <from> --}}
                            <div class="form-group">
                                <label><i class="fa fa-user text-info"></i>Name</label>
                                <input type="text" id="twoname" name="customer_name" class="form-control">
                            </div>
                                <input type="hidden" id="cid" name="cid" class="form-control">
                            
                               <input type="hidden" name="schid" name="customer_value" value="{{$busschedule->id}}" class="form-control">
                            <div class="form-group">
                                <label><i class="fa fa-envelope text-info"></i>Your Seat no</label>
                                <input type="text" name="seatno" class="form-control" value="{{$seat}}">
                                <input type="hidden" name="seatamout" class="form-control" value="{{$passenger1}}">
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-phone text-info"></i>Departure Date</label>
                                <input type="text" name="dep" value="{{$dep1}}" id="departure" class="form-control">
                            </div>
                            {{-- <div class="form-group">
                                <label><i class="fa fa-comment text-info"></i> Address</label>
                                <textarea rows="3" id="address" name="customer_address" class="form-control" placeholder="Enter Your Address" required="required"></textarea>
                            </div> --}}
                            <input type="submit" value="book now" class="btn btn-primary">
                        </form>
                    </div>
                    
            </div>
        </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <p class="font-weight-bold">Your Seat:</p>
              </div>
              <div class="col-md-6">
                <span class="txt text-right" style="color: #1b80bf; size: 20px; font-weight: bold;">{{$seat}}</span>
              </div>
              <div class="col-md-6">
                <p class="font-weight-bold">operator</p>
              </div>
              <div class="col-md-6">
                <h6>{{$busschedule->operator->operator_name}}</h6>
              </div>
              <div class="col-md-6">
                <p class="font-weight-bold">route</p>
              </div>
              <div class="col-md-6">
                <h6>{{$busschedule->region->region_name}}-{{$busschedule->subregion->subregion_name}}</h6>
              </div>
              <div class="col-md-6">
                <p class="font-weight-bold">Departure Time</p>
              </div>
              <div class="col-md-6">
                <h6>{{$busschedule->start_time}}</h6>
              </div>
              <div class="col-md-6">
                <p class="font-weight-bold">Arrival Time</p>
              </div>
              <div class="col-md-6">
                <h6>{{$busschedule->arrive_time}}</h6>
              </div>
              <div class="col-md-6">
                <p class="font-weight-bold">Subtotal</p>
              </div>
              <div class="col-md-6">
                @php
                $price=$busschedule->price;
                 $total=$passenger1*$price; @endphp
                <h6>{{ $total }}</h6>
              </div>
            </div>
           {{--  <form method="POST" action="{{route('customer',$busschedule->id)}}">
                   @csrf

                   <input type="hidden" name="seat" id="seatt" value="">
                   <input type="hidden" name="depaturedate" value="${depaturedate1}">
                   <input type="hidden" name="passenger" value="${passenger1}">
                   <input type="submit" name="" value="Continue to Travel Info" class="btn btn-primary">
                </form> --}}
              
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection
@section('script')
  <script type="text/javascript">
  $(document).ready(function () {
    // alert('hi');
    $('.form2').hide();
    $('.customerajax').click(function(){
      // alert('hello');
    $('.form1').hide();
    $('.form2').show();

      var name=$('#name').val();
      var email=$('#email').val();
      var phone=$('#phone').val();
      var address=$('#address').val();
      // alert(name);

      $.post("/customerstore",{name:name,email:email,phone:phone,address:address},function(res){
          // console.log(res);
          var id=res[0];
          var name=res[1];
          $('#twoname').val(name);
          $('#cid').val(id);


      })
     
    })
  })
  </script>
@endsection
