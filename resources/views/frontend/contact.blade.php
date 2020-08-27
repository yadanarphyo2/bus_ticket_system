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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

  <!-- Contact block -->

    <div class="contact-bolck mb-5">
    <div class="container text-center text-light py-5">
      <h2>Contact Us</h2>
      <h4>If you want to know something about us. You may send Message to Our Company.</h4>
    </div>
  </div>

  
<div class="container">
  <div class="row">
    <div class="col-md-6 mt-5">
      <h5 class="font-weight-bold">CONTACT INFO</h5>
        <i class="fas fa-map-marker-alt text-info"></i>
        <b>Address</b>
        <p class="ml-3 text-muted">No.123/124,70 Street,Maharaungmyae Township,Mandalay, Myanmar</p>
        <i class="fas fa-phone-square-alt text-info"></i>
        <b>Call Us</b>
        <p class="ml-3 text-muted">(95-9)23456,24689,12345,23579,24356</p>
        <i class="fas fa-envelope text-info"></i>
        <b>Email Us</b>
        <p class="ml-3 text-muted">Goldenbusticket@gmail.com</p>

        <img src="{{asset('frontend/img/bus1.png')}}" width="300px;" class="float-right">
    </div>

    <div class="col-md-6 mt-5 bg-light rounded">
      <h1 class="text-center font-weight-bold ">Contact</h1>
      <hr class="bg-info">
      <form action="" method="post" id="form-box" class="p-2">
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user text-info"></i> </span>
          </div>
          <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope text-info"></i> </span>
          </div>
          <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone text-info"></i> </span>
          </div>
          <input type="text" name="subject" class="form-control" placeholder="091234567" required>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-comment-alt text-info"></i> </span>
          </div>
          <textarea id="msg" name="msg" class="form-control" placeholder="Write your message" required></textarea>
        </div>

        <div class="form-group">
          <a href="#" class="btn btn-info btn-block click" onclick="myFunction()">Send</a>

        </div>
      </form>
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

    function myFunction() {
        swal("Success!", "Thank U for your message", "success");
}

    

  </script>

</body>

</html>
