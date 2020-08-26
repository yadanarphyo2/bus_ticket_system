<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Ticket System</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="text/css" href="{{asset('frontend/img/logo.png')}}" >

  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">

  <link href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> 
  
  <script src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</head>
<body>
   
   <!-- navbar -->
  <nav class="navbar navbar-expand-md bg-light navbar-light busindex">
    <div class="container">
      <a href="index.html" class="navbar-brand"><img src="{{asset('frontend/img/logo.png')}}" width="100px;" class="d-block"> <b style="color: #27476e;">GOLDEN Bus Ticket</b></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#busticket">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav ml-auto" align="left">
          <li class="nav-item"><a href="#" class="nav-link"> <span class="dot text-center" >1</span>Search-----</a></li>
          <li class="nav-item"><a href="#" class="nav-link"> <span class="dot text-center" >2</span>Select Seat-----</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><span class="dot text-center" >3</span>Info-----</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><span class="dot text-center" >4</span>Confirm</a></li>
        </ul>
      </div>
    </div>
  </nav>

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




    <!-- footer -->
    <div class="text-light" style="background-color: #162c40;">
      <div class="container py-5 ">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <h4>ABOUT</h4>
            <p class="pt-3 pr-5">GOLDEN bus ticket is reservation system by selling ticket from online.Choose from 50+ major bus operators covering 200 destinations.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <h4>INFORMATION</h4>
            <p class="pt-3">
              <i class="fas fa-greater-than"></i>
              Find/Print Your Ticket
            </p>
            <p>
              <i class="fas fa-greater-than"></i>
              How to open MPU Ecommerce
            </p>
            <p>
              <i class="fas fa-greater-than"></i>
              How to buy using bank transfer
            </p>
            <p>
              <i class="fas fa-greater-than"></i>
              Terms & Conditions
            </p>
            <p>
              <i class="fas fa-greater-than"></i>
              Privacy Policy
            </p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <h4 class="pb-2">CONTACT US</h4>
              <p class="pt-3"><i class="fas fa-phone-alt text-light"></i> 09403253735</p>
              <p><i class="fas fa-home"></i> Room No.1004 A, Tower(A), River View Point Condo, Thit Taw St, Ahlone Tsp, Yangon</p>
            <a class="pr-2" href="https://www.instagram.com/phyoyadanar66"><i class="fab fa-instagram fa-2x text-light"></i></a>
            <a class=" " href="https://www.facebook.com/baby.piggy.54772728"><i class="fab fa-facebook-square fa-2x text-light"></i></a>
            <a class="px-2" href="http://www.gmail.com"><i class="far fa-envelope fa-2x text-light"></i></a>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-light py-4">
      <div class="container">
        <div class="text-center text-muted">Powered by <a href="www.yadanarphyo.me" class="text-decoration-none text-secondary"> Yadanar Phyo
        </a> 
        Copyright © 2020 VALENTINO.All Rights Reserved-VAT 05412951005

      </div>
    </div>
  </footer>

  <script src="{{asset('frontend/js/form.js')}}"></script>
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
  
</body>

</html>
