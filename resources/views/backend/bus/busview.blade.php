@extends('backendtemplate')
@section('content')
<div class="container-fluid">
    <h2>Subcategory Edit (Form)</h2>
    <div class="row">
        <div class="offset-md-2 col-md-8">

        <form method="POST" action="{{route('buses.update',$bus->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <fieldset>
            <div class="row my-5">
              <div class="offset-2 col-md-8">
               
            <div class="form-group">
                <label for="oper">Operator</label>
                <select id="oper" name="operator_id" class="form-control">
                <optgroup label="Choose categories">
                @foreach($operators as $operator)
                <option value="{{$operator->id}}"
                    @if($operator->id == $bus->operator_id)
                    {{'selected'}}
                    @endif
                    >{{$operator->operator_name}}</option>
                @endforeach
                </optgroup> 
                    
                </select>
            </div>
            <div class="form-group">
              <input type="text" name="total_seats" rows="2" cols="20" class="form-control" value="{{$bus->total_seats}}" placeholder="Total Seats">
            </div>
            
              <button type="submit" class="btn btn-primary">Update Bus</button>
              <a href="{{route('buses.index')}}" class="btn btn-primary  mx-2">Go Back</a>
              
            </div>
          </div>
        </fieldset>
        </form>
    </div>
</div>
</div>
@endsection