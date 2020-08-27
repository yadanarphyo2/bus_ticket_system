@extends('backendtemplate')
@section('content')
<div class="container-fluid">
    <h2>Subcategory Edit (Form)</h2>
    <div class="row">
        <div class="offset-md-2 col-md-8">

        <form method="POST" action="{{route('schedules.update',$busschedule->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <fieldset>
            <div class="row my-5">
              <div class="offset-2 col-md-8">
               
            <div class="form-group">
                <label for="oper">Bus</label>
                <select id="oper" name="bus_id" class="form-control">
                <optgroup label="Choose categories">
                @foreach($buses as $bus)
                <option value="{{$bus->id}}"
                    @if($bus->id == $busschedule->bus_id)
                    {{'selected'}}
                    @endif
                    >{{$bus->operator->operator_name}}</option>
                @endforeach
                </optgroup> 
                    
                </select>
            </div>
            <div class="form-group">
                <label for="oper">Operator</label>
                <select id="oper1" name="operator_id" class="form-control">
                <optgroup label="Choose operator">
                @foreach($operators as $operator)
                <option value="{{$operator->id}}"
                    @if($operator->id == $busschedule->operator_id)
                    {{'selected'}}
                    @endif
                    >{{$operator->operator_name}}</option>
                @endforeach
                </optgroup> 
                    
                </select>
            </div>
            <div class="form-group">
                <label for="oper">Region</label>
                <select id="oper" name="region_id" class="form-control">
                <optgroup label="Choose categories">
                @foreach($regions as $region)
                <option value="{{$region->id}}"
                    @if($region->id == $busschedule->region_id)
                    {{'selected'}}
                    @endif
                    >{{$region->region_name}}</option>
                @endforeach
                </optgroup> 
                    
                </select>
            </div>
            <div class="form-group">
                <label for="oper">Sub Region</label>
                <select id="oper" name="subregion_id" class="form-control">
                <optgroup label="Choose categories">
                @foreach($subregions as $subregion)
                <option value="{{$subregion->id}}"
                    @if($subregion->id == $busschedule->subregion_id)
                    {{'selected'}}
                    @endif
                    >{{$subregion->subregion_name}}</option>
                @endforeach
                </optgroup> 
                    
                </select>
            </div>
            <div class="form-group">
              <input type="text" name="start_time" rows="2" cols="20" class="form-control" value="{{$busschedule->start_time}}" placeholder="Start Time(00:00:00)">
            </div>
            <div class="form-group">
              <input type="text" name="arrive_time" rows="2" cols="20" class="form-control" value="{{$busschedule->arrive_time}}" placeholder="Arrive Time(00:00:00)">
            </div>
            <div class="form-group">
              <input type="text" name="price" rows="2" cols="20" class="form-control" value="{{$busschedule->price}}" placeholder="Price">
            </div>
            <div class="form-group">
              <input type="text" name="description" rows="2" cols="20" class="form-control" value="{{$busschedule->description}}" placeholder="Type of bus">
            </div>
              <button type="submit" class="btn btn-primary">Update Schedule</button>
              <a href="{{route('schedules.index')}}" class="btn btn-primary  mx-2">Go Back</a>
              
            </div>
          </div>
        </fieldset>
        </form>
    </div>
</div>
</div>
@endsection