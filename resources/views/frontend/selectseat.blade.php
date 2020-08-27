@extends('nav')
@section('content')

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
                      @if($books==null)
                          <div class="col-md-6">
                              @php
                              $seatamount=$busschedule->bus->total_seats;
                            
                              @endphp
                              
                              @for ($i =1; $i <= 22; $i++)
                              <button id="b11" class="clickMe btn-lg mt-1" value="{{$i}}"> {{$i}}</button>
                              @endfor
                        </div>

                        <div class="col-md-6 text-right">
                          @for ($i =23; $i <= $seatamount; $i++)
                          <button id="b11" class="clickMe btn-lg mt-1" value="{{$i}}">{{$i}}</button>
                          @endfor
                        </div>

                      @elseif($books!=null)
                      @php 
                      $str='';

                      @endphp
                        @foreach($books as $book)
                        
                       @php
                       $str.=$book->seat_no.",";
                        @endphp
                        {{-- $combine=[].$concat($arr); --}}
                        {{-- String kept = str.substring( 0, str.indexOf(",")); --}}
                        @endforeach

                        @php
                       // echo $str;

                        $arr=explode(",", $str);

                        // var_dump($arr);die();
                        // $a[]=array_merge($arr);

                         // var_dump($arr);die();
                         $disable=count($arr);
                        // print_r($disable);die();
                        @endphp


                        <div class="col-md-6">
                              @php
                              $seatamount=$busschedule->bus->total_seats;
                            // @for($k=0;$k<)
                              
                              @endphp
                              {{-- {{$disable}} --}}
                              @for ($i =1; $i <= 22; $i++)
                              <button id="b11" class="clickMe btn-lg mt-1" value="{{$i}}"

                              @for($j=0;$j<$disable;$j++)

                              @if($i==$arr[$j])
                              {

                                disabled style="background-color: red;"
                              }
                              @endif
                              {{$j}}
                              @endfor > {{$i}}</button>
                              @endfor
                        </div>

                        <div class="col-md-6 text-right">
                          @for ($i =23; $i <= $seatamount; $i++)
                          <button id="b11" class="clickMe btn-lg mt-1" value="{{$i}}"
                          @for($j=0;$j<$disable;$j++)
                          @if($i==$arr[$j])
                          {
                            disabled style="background-color: red;"
                          }
                          @endif
                          {{$j}}
                          @endfor>{{$i}}</button>
                          @endfor
                        </div>
                      @endif
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
            Travel info
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <p class="font-weight-bold">Your Seat:</p>
              </div>
              <div class="col-md-6">
                <span id="seat" name="seat" class="txt text-right" style="color: #1b80bf; size: 20px; font-weight: bold;"></span>
                @if($errors->has('seat'))
                   <p class="text-danger">
                    {{-- <i class="fas fa-exclamation-triangle"> --}}</i> Please select Seat</p> 
                     @endif
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
                <h6>{{$passenger*$busschedule->price}} MMK</h6>
              </div>
            </div>
            <form method="POST" action="{{route('customer',$busschedule->id)}}">
                   @csrf

                   <input type="hidden" name="seat" id="seatt" value="">

                   <input type="hidden" name="depaturedate" value="{{$dep}}">
                   <input type="hidden" id="passenger" name="passenger" value="{{$passenger}}">
                   <input type="submit" name="" value="Continue to Travel Info" class="btn btn-primary">
                </form>
              
          </div>
            
          
        </div>
      </div>
    </div>
  </div>



@endsection
@section('script')
  <script>
    $(document).ready(function () {

      var animals=[];

      $('.clickMe').toggle(function(){

        $(this).toggleClass('pressed');
        var x= $(this).val();

        animals.push(x);
        
        // var str=JSON.stringify(animals);
        $('#seat').text(animals);
        $('#seatt').val(animals);
        var a=$('#passenger').val();
        if( animals.length == a)
        {
          // alert(animals.length);
            $(".clickMe").off("click");
         
        }
        // console.log(animals)
       
      },function(){
        // alert("h");
        $(this).toggleClass('pressed');
        var x= $(this).val();
        for( var i = 0; i < animals.length; i++)
          { 
            // alert(animals[i])
            if ( animals[i] == x) 
              {
               animals.splice(i, 1); 
               i--; 
              }
          }
        
          
        $('#seat').text(animals);
        $('#seatt').val(animals);
        
        // console.log(animals)
      });
    });
  </script>
@endsection
