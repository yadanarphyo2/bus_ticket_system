@extends('backendtemplate')
@section('content')
{{-- <a href="" class="btn btn-outline-secondary">yadanar</a>
<div class="modal fade" id="exampleModalCenteraddBus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle" align="center"><i class="glyphicon glyphicon-log-in">Add New Operator</i></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> --}}
        <h2 align="center"><i class="glyphicon glyphicon-log-in">Add New Operator</i></h2>
        <form method="POST" action="{{route('operators.update',$operator->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
          <fieldset>
            <div class="row my-5">
              <div class="offset-2 col-md-8">
                <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="operator_name" class="form-control" value="{{$operator->operator_name}}" aria-describedby="emailHelp" placeholder="Enter Operator Name" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" value="{{$operator->operator_email}}" name="operator_email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
              </div>
              </div>

           
            <div class="form-group">
              <input type="text" value="{{$operator->operator_email}}" name="operator_phone" class="form-control" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
            </div>
            <div class="form-group">
              <input type="text" value="{{$operator->operator_address}}" name="operator_address" rows="2" cols="20" class="form-control" placeholder="Enter Operator Address">
            </div>
            
            
            <div class="row">
              <div class="col-md-6">
                <label class="control-label">Image</label><br>
                <input type="file" name="operator_logo">
                <img src="{{asset($operator->operator_logo)}}" class="w-25 h-50">
                           <input type="hidden" name="old_logo" value="{{$operator->operator_logo}}">
              </div>
              <div class="col-md-6">

              <button type="submit" class="btn btn-primary float-right mt-3">Update Operator</button>
              <a href="{{route('operators.index')}}" class="btn btn-primary float-right mx-2 mt-3">Go Back</a>
              </div>
            </div>

            </div>
          </fieldset>

          </form>
         
        
{{--       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register Operator</button>
        
      </div>
       
    </div>
  </div>
</div> --}}
@endsection