@extends('backendtemplate')
@section('content')

        <h2 align="center"><i class="glyphicon glyphicon-log-in">Add New Operator</i></h2>
        <form method="POST" action="{{route('operators.store')}}" enctype="multipart/form-data">
          @csrf
          <fieldset>
            <div class="row my-5">
              <div class="offset-2 col-md-8">
                <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="operator_name" class="form-control" aria-describedby="emailHelp" placeholder="Enter Operator Name" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" name="operator_email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
              </div>
              </div>
            <div class="form-group">
              <input type="text" name="operator_phone" class="form-control" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
            </div>
            <div class="form-group">
              <input type="text" name="operator_address" rows="2" cols="20" class="form-control" placeholder="Enter Operator Address">
            </div>
            
            <div class="row">
              <div class="col-md-6">
                <label class="control-label">Image</label><br>
                <input type="file" name="operator_logo">
              </div>
              <div class="col-md-6">

              <button type="submit" class="btn btn-primary float-right mt-3">Register Operator</button>
              <a href="{{route('operators.index')}}" class="btn btn-primary float-right mx-2 mt-3">Go Back</a>
              </div>
            </div>
          </div>
        </fieldset>
      </form>
@endsection