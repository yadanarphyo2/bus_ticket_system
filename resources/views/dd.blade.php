<html>
<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Search From</title>
  <link href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</head>

<body>

<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">

        <div class="col-md-3">
          <label for="laeving" class=" text-muted"><small>From City</small></label>
          <select name="course" class="form-control" id="course" placeholder="From City">            
              @foreach($regions as $bs)
                <option value="{{$bs->id}}">{{$bs->region_name}}</option>
              @endforeach
          </select>
        </div>

        <div class="col-md-3">
          <label for="laeving" class="text-muted"><small>To City</small></label>
          
          <select name="batch" class="form-control" disabled="disabled" id="batch">
            <option value="">To City:</option>
            @foreach($subregions as $bss)
            <option value="{{$bss->subregion_id}}">{{$bss->subregion_name}}</option>
            @endforeach
          </select>
        </div>

      
        <div class="col-md-2">
          <label for="laeving" class="text-muted"><small>Depature Date</small></label>
          <input type="text" class="form-control" id="from" name="from" value="<?php echo date('m-d-Y');?>">
        </div>

        <div class="col-md-2">
          <label for="laeving" class="text-muted"><small>Number of Seats</small></label>
          <select id="leaving" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
        </div>

          <div class="col-md-2 mt-4">
            <a href="{{route('index')}}" class="btn btn-danger">SEARCH</a>
          </div>

        </div>
      </div>
    </div>
  </div>
  

<script src="{{asset('frontend/js/form.js')}}"></script>

  <script type="text/javascript">
    var dateToday = new Date();
    alert(dateToday);
    var dates = $("#from").datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      minDate: dateToday,
      onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate",
        instance = $(this).data("datepicker"),
        date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
      }
    });

  </script>

  <script type="text/javascript">
   $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });  
    
  })

</script>


{{-- <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function () {
             
                $('#category').on('change',function(e) {
                 
                 var cat_id = e.target.value;

                 $.ajax({
                       
                       url:"{{ route('subcat') }}",
                       type:"POST",
                       data: {
                           cat_id: cat_id
                        },
                      
                       success:function (data) {

                        $('#subcategory').empty();

                        $.each(data.subcategories[0].subcategories,function(index,subcategory){
                            
                            $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
                        })

                       }
                   })
                });

                $('select').selectize({
          sortField: 'text'
      });
            });



        </script> --}}
  
</body>
</html>