@extends('backendtemplate')
@section('content')
        <h2 align="center"><i class="glyphicon glyphicon-log-in">Add New Busschedule</i></h2>
        <form method="POST" action="{{route('schedules.store')}}">
          @csrf
          <fieldset>
            <div class="row my-5">
              <div class="offset-2 col-md-8">
               
            <div class="form-group">
              <select id="operator" name="bus_id" class="form-control">
                <optgroup label="Choose operator">
                  @foreach($buses as $bus)
                  <option value="{{$bus->id}}">{{$bus->operator->operator_name}}</option>
                  @endforeach
                </optgroup> 

              </select>
            </div>
            <div class="form-group">
              <select id="operator1" name="operator_id" class="form-control">
                <optgroup label="Choose operator">
                  @foreach($operators as $operator)
                  <option value="{{$operator->id}}">{{$operator->operator_name}}</option>
                  @endforeach
                </optgroup> 

              </select>
            </div>
            <div class="form-group">
              <select id="operator" name="region_id" class="form-control">
                <optgroup label="Choose operator">
                  @foreach($regions as $region)
                  <option value="{{$region->id}}">{{$region->region_name}}</option>
                  @endforeach
                </optgroup> 

              </select>
            </div>
            <div class="form-group">
              <select id="operator" name="subregion_id" class="form-control">
                <optgroup label="Choose operator">
                  @foreach($subregions as $subregion)
                  <option value="{{$subregion->id}}">{{$subregion->subregion_name}}</option>
                  @endforeach
                </optgroup> 

              </select>
            </div>
            <div class="form-group">
              <input type="text" name="start_time" rows="2" cols="20" class="form-control" placeholder="Start Time">
            </div>
            <div class="form-group">
              <input type="text" name="arrive_time" rows="2" cols="20" class="form-control" placeholder="Arrival Time">
            </div>
            <div class="form-group">
              <input type="text" name="price" rows="2" cols="20" class="form-control" placeholder="Price">
            </div>
              <button type="submit" class="btn btn-primary">Register Schedule</button>
              <a href="{{route('schedules.index')}}" class="btn btn-primary  mx-2">Go Back</a>
              
            </div>
          </div>
        </fieldset>
      </form>
@endsection