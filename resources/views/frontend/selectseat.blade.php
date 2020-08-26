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
    <h6 class="font-weight-bold offset-1 d-inline-block">Select {{$passenger}} seat(s)</h6>

    
    <div class="row">
      <div class="offset-1 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <div class="card card1 ">
                  <div class="card-body">
                    <div class="row">
                      
                      <div class="col-md-6">
                        @php
                        $seatamount=$busschedule->bus->total_seats;
                        
                        @endphp
                        
                        @for ($i =1; $i <= 20; $i++)
                        <button id="b11" class="clickMe btn-lg mt-1" value="{{$i}}" >{{$i}}</button>
                        @endfor
                      </div>

                      <div class="col-md-6 text-right">
                        @for ($i =21; $i <= $seatamount; $i++)
                        <button id="b11" class="clickMe btn-lg mt-1" value="{{$i}}" >{{$i}}</button>
                        @endfor
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <p class="text-muted">Seats Available</p>
                
                  <button id="1" class="btn available  my-2 btn-lg" value="1" style="background-color: lightgray;"></button>

                <span class="font-weight-bold" >Available</span><br>

                <button id="1" class="btn  selectbtn my-2 btn-lg" value="1" style="background-color: #1b80bf;"></i></button>

                <span class="font-weight-bold" >Selected</span><br>
                <button id="1" class="btn book my-2 btn-lg" value="1" style="background-color: red;"></button>
                <span class="font-weight-bold" >Booked</span>
                
                
              </div>

            </div>
            
            
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <p class="font-weight-bold">Your Seat:</p>
              </div>
              <div class="col-md-6">
                <span id="seat" class="txt text-right" style="color: #1b80bf; size: 20px; font-weight: bold;"></span>
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
                <h6>{{$passenger*$busschedule->price}}</h6>
              </div>
            </div>
            <form method="POST" action="{{route('customer',$busschedule->id)}}">
                   @csrf

                   <input type="hidden" name="seat" id="seatt" value="">
                   <input type="hidden" name="depaturedate" value="{{$dep}}">
                   <input type="hidden" name="passenger" value="{{$passenger}}">
                   <input type="submit" name="" value="Continue to Travel Info" class="btn btn-primary">
                </form>
              
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
  <script>
    $(document).ready(function () {
      var animals=[];
      $('.clickMe').click(function(){
        $(this).toggleClass('pressed');
        var x= $(this).val();
        animals.push(x);
        for(var i=0; i<=animals.length;i++)
        {
          console.log(animals[i]);
        if (animals[i]==null) {
          animals.push(x);
        }else{
          animals.push(x);
        }

      }
        
        // var str=JSON.stringify(animals);
        $('#seat').text(animals);
        $('#seatt').val(animals);

      });
    });
  </script>
</body>

</html>
