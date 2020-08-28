@extends('nav')
@section('content')

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
            <option value="{{$bss->id}}"
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
          <div class="col-md-9 ">
          <div class="row">
            @foreach($busschedule as $bussche)
            <div class="col-md-12 " id="myroute">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class=" col-md-4 pl-4">
                  <img src="{{asset($bussche->operator->operator_logo)}}" width="100px;"><br>
                  <h5 class="my-2" style="font-family: offline2;">{{$bussche->operator->operator_name}}</h5>
                  <span>{{$bussche->region->region_name}}-{{$bussche->subregion->subregion_name}}</span>
                    
                  </div>
                  <div class=" col-md-5 pt-3">
                  <h5>{{$bussche->start_time}} AM -{{$bussche->bus->description}}</h5>
                  
                   <span>{{$bussche->start_time}} AM - {{$bussche->arrive_time}} PM</span><br>
                  
                   <h5><small>Depature Date:{{$from}}</small></h5>
                 </div>

                 <div class="col-md-3 pt-3">
                  <h5 style="font-family: offline2;"> {{$bussche->price*$passenger}} MMK</h5>
                  <span style="color: green;" >{{$passenger}} seats x {{$bussche->price}} MMK </span><br>
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
          </div>
          @endforeach
          </div>
          </div>
          </div>
        </div>
      </div>
  </div>
 @endsection
@section('script')
  

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
      // alert(id);

      $.post("/getoperator",{sid:id,rid:rid,sub:sub},function(res){
        var str=JSON.stringify(res);
        // alert(str);
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

@endsection
