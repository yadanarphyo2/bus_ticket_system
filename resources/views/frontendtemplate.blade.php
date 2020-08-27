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

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-master/slick/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-master/slick/slick-theme.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


   <div class="bg_im">
   <!-- navbar -->
  <nav class="navbar navbar-expand-md busticketnav">
    <div class="container">
      <a href="{{route('frontend')}}" class="navbar-brand"><img src="{{asset('frontend/img/logo.png')}}" width="80px;" height="40px;" class="d-block ml-3"><h5 style="color: #27476e; font-family: offline;" >GoldenBusTicket</h5></a>
      <span class="navbar-toggler" data-toggle="collapse" data-target="#busticket">
        <i class="fas fa-bars"></i>
      </span>
      <div class="collapse navbar-collapse" id="busticket">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{route('frontend')}}" class="nav-link">HOME</a></li>
          
          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>
  

  <div class="container pt-5 mt-5">
  <div class="card opbus">
    <div class="card-header">
      Search From
    </div>
    <form method="POST" action="{{route('index')}}">
      @csrf
    <div class="card-body my-3">
      <div class="row">

        <div class="col-md-3 form-group">
          <label for="laeving" class=" text-dark"><small>From City</small></label>
          <select name="region" class="form-control" id="region">
            <option value="">From City:</option>
              @foreach($regions as $bs)
                <option value="{{$bs->id}}">{{$bs->region_name}}</option>
              @endforeach
          </select>
        </div>

        <div class="col-md-3 form-group">
          <label for="laeving" class="text-dark"><small>To City</small></label>
          <select name="subregion" class="form-control" id="subregion">
            <option value="">To City:</option>
            {{-- @foreach($subregions as $bss)
            <option value="{{$bss->subregion_id}}">{{$bss->subregion_name}}</option>
            @endforeach --}}
          </select>
        </div>

      
        <div class="col-md-2 form-group">
          <label for="laeving" class="text-dark"><small>Depature Date</small></label>
          <input type="text" class="form-control" id="from" name="from" value="{{date('Y-m-d')}}">
        </div>

        <div class="col-md-2 form-group">
          <label for="laeving" class="text-dark"><small>Number of Seats</small></label>
          <select name="passenger" id="leaving" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
        </div>

          <div class="col-md-2 mt-4 pt-2">
            <button type="submit" class="btn btn-primary" style="font-family: offline2;">SEARCH</button>
          </div>

        </div>
      </div>
    </form>
    </div>
  </div>
  </div>


  <!-- popular route -->
    
      <div class="container text-center">
      
        
          <h3 class="mt-5" style="font-family: offline2;">Popular Routes</h3>
          <hr class="divider">
          <div class="container">
          <div class="row">
          <div class="col-md-12">
          <div class="slick-slider slider py-5" >
            <div class="text-center photohover">
              <div class="card mr-3">
                <div class="card-img">
                  <img src="{{asset('frontend/img/yangon.jpg')}}" width="250px" height="100px" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                  <p><i class="fas fa-location-arrow px-2 arr text-info"></i>Yangon-Mandalay</p>
                </div>
              </div>
            </div>

            <div class="text-center photohover">
              <div class="card mr-3" >
                <div class="card-img">
                  <img src="{{asset('frontend/img/mandalay.jpeg')}}" width="250px" height="100px" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                  <p><i class="fas fa-location-arrow px-2 text-info"></i>Mandalay-Bagan</p>
                </div>
              </div>
            </div>


            <div class="text-center photohover">
              <div class="card mr-3">
                <div class="card-img">
                  <img src="{{asset('frontend/img/bagan.jpeg')}}" width="250px" height="100px" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                  <p><i class="fas fa-location-arrow px-2 text-info"></i>Bagan-Yangon</p>
                </div>
              </div>
            </div>        

            <div class="text-center photohover">
              <div class="card mr-3">
                <div class="card-img">
                  <img src="{{asset('frontend/img/inlay.jpeg')}}" width="250px" height="100px" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                  <p><i class="fas fa-location-arrow px-2 text-info"></i>Inlay-Mandalay</p>
                </div>
              </div>
            </div>

            <div class="text-center photohover">
              <div class="card mr-3">
                <div class="card-img">
                  <img src="{{asset('frontend/img/naypyidaw.jpeg')}}" width="250px" height="100px" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                  <p><i class="fas fa-location-arrow px-2 text-info"></i>Naypwidaw-Yangon</p>
                </div>
              </div>
            </div>

          </div>
          </div>
        </div>
      </div>
    
    <!-- comment -->
    <div class="container container-fluid my-5">
      <h3 class="text-center" style="font-family: offline2;">Why Book with Golden Bus Ticket</h3>
          <hr class="divider pb-5">

      <div class="row pb-5">
          <div class="col-lg-3 col-md-4 col-sm-6 p-0">
            <div class="card h-100">
              <div class="card-img mt-3 my-3">
                <i class="fas fa-plus-square fa-3x text-info"></i>
              </div>
            <div class="card-body" style="font-family: offline2;">

            <p class="text-info">SAFETY +</p>
            
            <p>" With Safety+ we have brought in a set of measures like Sanitized buses, mandatory masks etc. to ensure you travel safely." </p>
            </div>

          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-0">
          <div class="card h-100"> 
            <div class="card-img mt-3 my-3">
              <i class="fas fa-user-cog fa-3x text-info"></i>
            </div>
            <div class="card-body" style="font-family: offline2;">

            <p class="text-info">CUSTOMER SERVICE</p>
            <p>" We put our experience and relationships to good use and are available to solve your travel issues."</p>

            
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-0">
          <div class="card h-100"> 
            <div class="card-img mt-3 my-3">
              <i class="fas fa-tags fa-3x text-info"></i>
            </div>
            <div class="card-body" style="font-family: offline2;">

            <p class="text-info">LOWEST PRICES</p>
            <p>"We always give you the lowest price with the best partner offers." </p>

            
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-0">
          <div class="card h-100"> 
            <div class="card-img mt-3 my-3">
              <i class="fas fa-gifts fa-3x text-info"></i>
            </div>
            <div class="card-body" style="font-family: offline2;">


            <p class="text-info">UNMATCHED BENEFITS</p>
            <p>" We take care of your travel beyond ticketing by providing you with innovative and unique benefits."</p>

            
          </div>
        </div>
        </div>
      </div>
      
    </div>

  </div>



  {{-- operator --}}
  <div class="container">
    <h3 class="text-center mt-5" style="font-family: offline2;">BUS OPERATOR</h3>
    <hr class="divider pb-5">
    <div class="row mb-5" >
      @foreach($operators as $operator)
      <div class="col-lg-2 col-md-2 col-sm-3 py-1">
        <img src="{{asset($operator->operator_logo)}}" width="130px;">
      </div>
     @endforeach
    </div>
  </div>
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
  <script type="text/javascript" src="{{asset('frontend/slick-master/slick/slick.js')}}"></script>

   
   

 
 <script type="text/javascript">
   $(document).ready(function () {   

      var dateToday = new Date();
      var dates = $("#from").datepicker({
        dateFormat: 'yy-mm-d',
        defaultDate: "+1",
        changeMonth: true,
        numberOfMonths: 1,
        minDate: dateToday,
        onSelect: function(selectedDate) {
          var option = this.id == "from" ? "minDate" : "maxDate",
          instance = $(this).data("datepicker"),
          date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
          dates.not(this).datepicker("option", option, date);
        }
      }); 
      $('.slick-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
         responsive: [
         {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
         },
         {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
         },
         {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
         }
         ]
        });
    
  })

</script>
</body>

</html>
