$(document).ready(function () {
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('#region').change(function () {
    var id = $(this).val();
    // alert(cid);
    $.post("/getsubregion",{id:id},function (res) {
      // console.log(res);
      // $('#subregion').prop('disabled',false);

      var html = `<option value="">To City:</option>`;
      $.each(res,function (i,v) {
        
        console.log(v);

      // if (v.id==subregion) {
      //     html +=`<option value="${v.id}" selected>
      //             ${v.subregion_name}
      //           </option>`;
      //     }else
      //     {
              html +=`<option value="${v.id}">
              ${v.subregion_name}
            </option>`;
           // }
      })
      $('#subregion').html(html);
    })
  })

  // $('#myroute').on('click','.selectseat',function(){
  //      var id = $(this).data('id');
  //      var busid = $(this).data('busid');
  //      var name = $(this).data('name');
  //      var stime = $(this).data('stime');
  //      var atime = $(this).data('atime');
  //      var city = $(this).data('city');
  //      var subcity = $(this).data('subcity');
  //      var depdate = $(this).data('depdate');
  //      console.log(id);
  //      // , ['id' => '"+id "']
  //      // $('.seat').append('<li><a href="{{route("selectseat","'+id+'")}}"></a></li>');     
  //     });

  
})