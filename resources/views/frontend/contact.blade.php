@extends('nav')
@section('content')
  <!-- Contact block -->

    <div class="contact-bolck mb-5 text-center">
      <h1 style="font-family: offline3;" class="pt-5">Contact Us</h1>
      <h3 style="font-family: offline3;" class="pl-3">To</h3>
      <h2 style="font-family: offline3;" class="pl-5">Travel By Bus.... &hearts;</h2>

  </div>

  
<div class="container">
  <div class="row">
    <div class="col-md-6 mt-5">
      <h5 class="font-weight-bold pb-3">CONTACT INFO</h5>
        <i class="fas fa-map-marker-alt text-info"></i>
        <b>Address</b>
        <p class="ml-3 text-muted">No.123/124,70 Street,Maharaungmyae Township,Mandalay, Myanmar</p>
        <i class="fas fa-phone-square-alt text-info"></i>
        <b>Call Us</b>
        <p class="ml-3 text-muted">(95-9)23456,24689,12345,23579,24356</p>
        <i class="fas fa-envelope text-info"></i>
        <b>Email Us</b>
        <p class="ml-3 text-muted">Goldenbusticket@gmail.com</p>

        <img src="{{asset('frontend/img/bus1.png')}}" width="300px;" class="float-right">
    </div>

    <div class="col-md-6 my-5 bg-light rounded">
      <h1 class="text-center font-weight-bold ">Contact</h1>
      <hr class="bg-info">
      <form action="" method="post" id="form-box" class="p-2">
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user text-info"></i> </span>
          </div>
          <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope text-info"></i> </span>
          </div>
          <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone text-info"></i> </span>
          </div>
          <input type="text" name="subject" class="form-control" placeholder="091234567" required>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-comment-alt text-info"></i> </span>
          </div>
          <textarea id="msg" name="msg" class="form-control" placeholder="Write your message" required></textarea>
        </div>

        <div class="form-group">
          <a href="#" class="btn btn-info btn-block click" onclick="myFunction()">Send</a>
        </div>
      </form>
    </div>

  </div>
</div>




@endsection
@section('script')
<script type="text/javascript">
    function myFunction() {
        swal("Success!", "Thank U for your message", "success");
}
</script>
@endsection

