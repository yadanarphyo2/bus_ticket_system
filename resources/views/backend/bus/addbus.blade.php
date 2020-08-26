@extends('backendtemplate')
@section('content')
        <h2 align="center"><i class="glyphicon glyphicon-log-in">Add New Bus</i></h2>
        <form method="POST" action="{{route('buses.store')}}">
          @csrf
          <fieldset>
            <div class="row my-5">
              <div class="offset-2 col-md-8">
               
            <div class="form-group">
              <select id="operator" name="operator_id" class="form-control">
                <optgroup label="Choose operator">
                  @foreach($operators as $operator)
                  <option value="{{$operator->id}}">{{$operator->operator_name}}</option>
                  @endforeach
                </optgroup> 

              </select>
            </div>
            <div class="form-group">
              <input type="text" name="total_seats" rows="2" cols="20" class="form-control" placeholder="Total Seats">
            </div>
            <div class="form-group">
              <input type="text" name="description" rows="2" cols="20" class="form-control" placeholder="Type of car">
            </div>
              <button type="submit" class="btn btn-primary">Register Bus</button>
              <a href="{{route('buses.index')}}" class="btn btn-primary  mx-2">Go Back</a>
              
            </div>
          </div>
        </fieldset>
      </form>
@endsection