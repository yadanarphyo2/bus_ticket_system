@extends('backendtemplate')
@section('content')
<div class="container-fluid mb-3">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Regions Create</h1>
    
</div>
  <div class="row">
    <div class="offset-md-2 col-md-8">
      <form method="POST" action="{{route('regions.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="region_name" class="form-control">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Register region</button>
        <a href="{{route('regions.index')}}" class="btn btn-primary  mx-2">Go Back</a>
      </form>
    </div>
  </div>


 </div>
@endsection