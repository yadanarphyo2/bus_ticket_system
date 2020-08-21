<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bus Ticket System</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="text/css" href="{{asset('frontend/img/logo.png')}}" >

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
</head>
<body>
   <div class="bg_im">
   <!-- navbar -->
  <nav class="navbar navbar-expand-md busticketnav">
    <div class="container">
      <a href="index.html" class="navbar-brand"><img src="{{asset('frontend/img/logo.png')}}" width="100px;" class="d-block"> <b style="color: #27476e;">GOLDEN Bus Ticket</b></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#busticket">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="busticket">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="" class="nav-link">HOME</a></li>
          <li class="nav-item"><a href="" class="nav-link">Ticket</a></li>
          <li class="nav-item"><a href="" class="nav-link">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container opbus mt-5 pt-5">
    <div class="card bg-dark">
    <div class="card-body">
      <div class="form">
        <div class="row">
          <div class="col-md-3">
            <div class="form-group busticket">
                  <label for="laeving" class="text-muted"><small>Leaving From</small></label>
                  <select id="leaving" class="form-control " onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;">
                    <option value="">Select a state...</option>
                    <option value="1">Yangon</option>
                    <option value="2">Mandalay</option>
                    <option value="3">Bagan</option>
                  </select>

                  
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="form-group">
                  <label for="laeving" class="text-muted"><small> Going To</small></label>
                  <select id="leaving" class="form-control " onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;">
                    <option value="1">Yangon</option>
                    <option value="2">Mandalay</option>
                    <option value="3">Bagan</option>
                    
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="expdate" class="date text-muted"><small>Depature Date</small></label>
                  <input type="date" class="form-control" id="expdate" placeholder="Select Date">
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="laeving" class="text-muted"><small>Number of Seat</small></label>
                  <select id="leaving" class="form-control " onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 my-4">
                <div class="form-group">
                  <button class="btn btn-outline-danger">Search</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h2 class="text-center my-5">BUS OPERATOR</h2>
    <div class="row">
      <div class="col-md-2">
        <img src="{{asset('frontend/img/ATW.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Ayein_Na_Mar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Bagan_Min_Thar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Chin_Taung_Tan.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/GI_Group.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/High_Class.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Khaing_Mandalay.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Kyan_Tai_Aung.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Kyaw_Hlwar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Lumbani.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Ma_Naw_Ta_Kun.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Man_Yar_Zar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Mandalar_Min.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Mya_Yadanar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
      </div>
      <div class="col-md-2">
        <img src="{{asset('frontend/img/Moe_Htet_Arkar.png')}}" width="150px;">
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


  <script src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
</body>

</html>
