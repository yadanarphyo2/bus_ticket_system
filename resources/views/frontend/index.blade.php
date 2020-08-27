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
      <a href="index.html" class="navbar-brand"><img src="{{asset('frontend/img/logo.png')}}" width="100px;" class="d-block ml-4"><h4 style="color: #27476e;">Golden Bus Ticket</h4></a>
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

  <div class="container py-3">
  <div class="card opbus">
    <div class="card-header">
      Search From
    </div>
    <div class="card-body my-3">
      <div class="row">

        <div class="col-md-3">
          <label for="laeving" class=" text-dark"><small>From City</small></label>
          <select name="region" class="form-control" id="region">
            <option value="">From City:</option>
              @foreach($regions as $bs)
                <option value="{{$bs->id}}"
                  @if($bs->id == $region)
                    {{'selected'}}
                  @endif
                  >{{$bs->region_name}}</option>
              @endforeach
          </select>
        </div>

        <div class="col-md-3">
          <label for="laeving" class="text-dark"><small>To City</small></label>
          <select name="subregion" class="form-control" id="subregion">
            <option value="">To City:</option>
            @foreach($subregions as $bss)
            <option value="{{$bss->subregion_id}}"
              @if($bss->id == $subregion)
                    {{'selected'}}
              @endif
              >{{$bss->subregion_name}}</option>
            @endforeach
          </select>
        </div>

      
        <div class="col-md-2">
          <label for="laeving" class="text-dark"><small>Depature Date</small></label>
          <input type="text" class="form-control" id="from" name="from" value="{{$from}}">
        </div>

        <div class="col-md-2">
          <label for="laeving" class="text-dark"><small>Number of Seats</small></label>
          <select id="leaving" class="form-control">
            <option value="1" 
            @if(  1 == $passenger)
                    {{'selected'}}
              @endif>1</option>
            <option value="2"
            @if(  2 == $passenger)
                    {{'selected'}}
              @endif>2</option>
            <option value="3"
            @if(  3 == $passenger)
                    {{'selected'}}
              @endif>3</option>
            <option value="4"
            @if(  4 == $passenger)
                    {{'selected'}}
              @endif>4</option>
            <option value="5"
            @if(  5 == $passenger)
                    {{'selected'}}
              @endif>5</option>
            <option value="6" 
            @if(  6 == $passenger)
                    {{'selected'}}
              @endif>6</option>

          </select>
        </div>
          <div class="col-md-2 mt-4 pt-2">
            <button class="btn btn-primary searchroute" style="font-family: offline2;">SEARCH</button>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container">
        <div class="row">
          <div class="col-md-3 mb-3">
            <h3 style="font-family: offline2;" class="pb-2">Search By Operator</h3>
            @foreach($operators as $operator)
                <a href="#" class="filter list-group-item text-decoration-none" data-id="{{$operator->id}}"><b class="text-dark">{{$operator->operator_name}}</b></a>
            @endforeach
          </div>
          <div class="col-md-9 pb-5" id="myroute">
            @foreach($busschedule as $bussche)
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="offset-1 col-md-4">
                    <img src="{{asset($bussche->operator->operator_logo)}}" width="100px;"><br>
                    <h6 class="my-2"><b>{{$bussche->operator->operator_name}}</b></h6>
                    <h5 class="mb-3"><small>{{$bussche->bus->description}}</small></h5>
                  </div>
                  <div class="col-md-4 pt-4">
                   <span>{{$from}}<b>{{$bussche->start_time}} AM - </b><b>{{$bussche->arrive_time}} PM</b></span><br>
                   <i class="fas fa-location-arrow"></i> <span>{{$bussche->region->region_name}}-{{$bussche->subregion->subregion_name}}</span>
                 </div>
                 <div class="col-md-3 pt-3">
                  <h5> {{$bussche->price*$passenger}} MMK </h5>
                  <b style="color: green;">{{$bussche->price}} x {{$passenger}} MMK</b><br>
                  <form method="POST" action="{{route('selectseat',$bussche->id)}}">
                   @csrf
                   <input type="hidden" name="depaturedate" value="{{$from}}">
                   <input type="hidden" name="passenger" value="{{$passenger}}">
                   <input type="submit" name="" value="Selectseat" class="btn btn-primary selectseat">
                </form>
              </div>
            </div>
            </div>
            </div>
            @endforeach
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

      $('.searchroute').click(function(){
        // alert("hi");
      var depaturedate= document.getElementById("from").value;

      var passenger=$('#leaving').val();
      var sub=$('#subregion').val();
      var id=$('#region').val();
      // alert(sub);
      $.post("/getdata",{id:id,sub:sub},function (res) {
        // var str=JSON.stringify(res);
        // console.log(res);
        // alert(res);
        // var city=res[1];
        // var subcity=res[2];
        // var operate=res[3];
        // var operatelogo=res[4];
        

        var html='';
      $.each(res[0],function(i,v){

        // console.log(v);
        var url="{{route('selectseat',':id')}}";
        url = url.replace(':id',v.id);
        var csrf='@csrf';
        // var city=res[0][i];
        // city=city.replace('i',v.region);


        html+=`<div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class=" col-md-4 pl-4">
                  <img src="${v.oplogo}" width="100px;"><br>
                  <h5 class="my-2" style="font-family: offline2;">${v.opname}</h5>
                  <span>${v.regionname}-${v.subregionname}</span>
                    
                  </div>
                  <div class=" col-md-5 pt-3">
                  <h5>${v.start_time} AM -${v.description}</h5>
                  
                   <span>${v.start_time} AM - ${v.arrive_time} PM</span><br>
                  
                   <h5><small>Depature Date:${depaturedate}</small></h5>
                 </div>

                 <div class="col-md-3 pt-3">
                  <h5 style="font-family: offline2;"> ${v.price*passenger} MMK</h5>
                  <span style="color: green;" >${passenger} seats x ${v.price} MMK </span><br>

                  <form method="POST" action="${url}" class="mt-1">
                   ${csrf}
                   <input type="hidden" name="depaturedate" value="${depaturedate}">
                   <input type="hidden" name="passenger" value="${passenger}">
                   <input type="submit" name="" value="Selectseat" class="btn btn-primary selectseat">
                </form>
                </div>
              </div>
            </div>
            </div>
          </div>`
      })
      $('#myroute').html(html);
       }) 
      })



      $('.filter').click(function(){
       
      var id=$(this).data('id');
      var depaturedate= document.getElementById("from").value;
      var passenger=$('#leaving').val();
      var sub=$('#subregion').val();
      var rid=$('#region').val();
      alert(id);

      $.post("/getoperator",{sid:id,rid:rid,sub:sub},function(res){
        var str=JSON.stringify(res);
        alert(str);
        // var city1=res[1];
        // var subcity1=res[2];
        // var operate1=res[3];
        // var operatelogo1=res[4];
        

        var html='';
        
        $.each(res[0],function(i,v){
          
        var url="{{route('selectseat',':id')}}";
        url = url.replace(':id',v.id);
        var csrf='@csrf';
        console.log(v);
        html+=`<div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class=" col-md-4 pl-4">
                  <img src="${v.oplogo1}" width="100px;"><br>
                  <h5 class="my-2" style="font-family: offline2;">${v.opname1}</h5>
                  <span>${v.regionname1}-${v.subregionname1}</span>
                    
                  </div>
                  <div class=" col-md-5 pt-3">
                  <h5>${v.start_time} AM -${v.description}</h5>
                  
                   <span>${v.start_time} AM - ${v.arrive_time} PM</span><br>
                  
                   <h5><small>Depature Date:${depaturedate}</small></h5>
                 </div>

                 <div class="col-md-3 pt-3">
                  <h5 style="font-family: offline2;"> ${v.price*passenger} MMK</h5>
                  <span style="color: green;" >${passenger} seats x ${v.price} MMK </span><br>

                  <form method="POST" action="${url}" class="mt-1">
                   ${csrf}
                   <input type="hidden" name="depaturedate" value="${depaturedate}">
                   <input type="hidden" name="passenger" value="${passenger}">
                   <input type="submit" name="" value="Selectseat" class="btn btn-primary selectseat">
                </form>
                </div>
              </div>
            </div>
            </div>
          </div>`
        
      })
      $('#myroute').html(html);
      
      })
    })

      // $('select').selectize({
      //     sortField: 'text'
      // }); 

    })



</script>


</body>

</html>
