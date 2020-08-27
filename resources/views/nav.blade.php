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
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
   
    <nav class="navbar navbar-expand-md bg-light navbar-light busindex">
    <div class="container">
      <a href="{{route('frontend')}}" class="navbar-brand"><img src="{{asset('frontend/img/logo.png')}}" width="80px;" height="40px;" class="d-block ml-3"><h5 style="color: #27476e; font-family: offline;">GoldenBusTicket</h5></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#busticket">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="busticket">
        <ul class="navbar-nav ml-auto" align="left">
          
          <li class="nav-item"><a href="{{route('frontend')}}" class="nav-link">HOME</a></li>
          
          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>


@yield('content')

   <!-- footer -->
    <div class="text-light" style="background-color: #162c40;">
      <div class="container py-5 ">
        <div class="row">

          <div class="col-lg-4 col-md-6 col-sm-6">
            
            <h4 style="font-family: offline;">ABOUT</h4>


            <p class="pt-3 pr-5">GOLDEN bus ticket is reservation system by selling ticket from online.Choose from 50+ major bus operators covering 200 destinations.
            </p>
            
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <h4 style="font-family: offline;">INFORMATION</h4>
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
            <h4 class="pb-2" style="font-family: offline;">CONTACT US</h4>
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
        <div class="text-center text-muted">Powered by <a href="www.yadanarphyo.me" class="text-decoration-none text-secondary"> Intelgroup
        </a> 
        Copyright © 2020 GOLDENBusTicket.All Rights Reserved-VAT 05412951005

      </div>
    </div>
  </footer>



  <script src="{{asset('frontend/js/form.js')}}"></script>
  
@yield('script')

</body>

</html>
