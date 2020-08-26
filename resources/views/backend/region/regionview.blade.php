@extends('backendtemplate')
@section('content')
<div class="container-fluid mb-3">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Region Edit</h1>
    
  


    <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
  </div>
  <div class="row">
    <div class="offset-md-2 col-md-8">
      <form method="POST" action="{{route('regions.update',$region->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="region_name" class="form-control" value="{{$region->region_name}}">
        </div>
        <button type="submit" class="btn btn-primary">Update Regions</button>
        <a href="{{route('regions.index')}}" class="btn btn-primary  mx-2">Go Back</a>
      </form>
    </div>
  </div>


 </div>
@endsection