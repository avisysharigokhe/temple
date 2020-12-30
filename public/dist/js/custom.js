 var base_url = $("#base_url").val();
 $(function () {
    $('#events').DataTable({
      responsive: true
    });
  $('input[name="event_date"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: parseInt(moment().format('YYYY'),10),
    maxYear: parseInt(moment().format('YYYY'),10)+1
  }, function(start, end, label) {
    var years = moment().diff(start, 'years');
 //   alert("You are " + years + " years old!");
  });
  });
 $(document).ready(function(){
    $(".add_event_form").validate({
        rules:{
          event_title:{
            required:true
          },
          event_description:{
            required:true,
            minlength:"50"

          },
          event_photo:{
            // required:true,
           extension: "jpg|jpeg|png"

          },
          event_date:{
            required:true
          }
        },
        messages:{
          event_title:{
            required:"please enter event title"  
          },
          event_description:{
            required:"please enter event description",
            minlength:"please enter at least 100 character about event description"
          },
          event_photo:{
            required:"please enter event photo",
            extension:"please upload jpg, jpeg or jpeg image only"
          },
          event_date:{
            required:"please enter event date"  
          }

        }
    });
    $(".edit_event_form").validate({
        rules:{
          event_title:{
            required:true
          },
          event_description:{
            required:true,
            minlength:"50"

          },
          event_photo:{
            // required:true,
           extension: "jpg|jpeg|png"

          },
          event_date:{
            required:true
          },
          status:{
            required:true
          }
        },
        messages:{
          event_title:{
            required:"please enter event title"  
          },
          event_description:{
            required:"please enter event description",
            minlength:"please enter at least 100 character about event description"
          },
          event_photo:{
            required:"please enter event photo",
            extension:"please upload jpg, jpeg or jpeg image only"
          },
          event_date:{
            required:"please enter event date"  
          }

        }
    });
    $(document).on("click",".event_stataus",function() {
      $("#update_event").validate();
    });
    $(document).on("click",".event_stataus",function() {
      var request = $.ajax({
        url: base_url+"/update_event_status",
        type: "POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {id : $(this).attr('data-id'),status : $(this).attr('data-status')},
        dataType: "json"
      });
      request.done(function(response) {
          location.reload(true);
      });
  });

    $(document).on("click",".delete_event",function() {
      var isConfirm = confirm("Are you sure you want to delete this event?");
      if(isConfirm) {
          var request = $.ajax({
          url: base_url+"/delete_event",
          type: "POST",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {id : $(this).attr('data-id')},
          dataType: "json"
        });
        request.done(function(response) {
            location.reload(true);
        });
      } else {
        return false;
      }
      
  });

 })


 function show_detail($this){
  // $("#event_title").html($($this).attr('data-name'))
  $("#event_description").html($($this).attr('data-description'))
  // $("#event_status").html($($this).attr('data-status'))
  // $("#event_date").html($($this).attr('data-event_date'))
  // $("#event_photo").html('<img class="direct-chat-img"  style="float:none" src="'+$($this).attr('data-photo')+'" alt="message user image">')
 }

 function set_event_data($this) {
  console.log($($this).attr('data-id'))
  $("#edit_event_modal #event_title").val($($this).attr('data-name'))
  $("#edit_event_modal  #event_description").html($($this).attr('data-description'))
  $("#edit_event_modal #status").html($($this).attr('data-status'))
  $("#edit_event_modal  #event_date").val($($this).attr('data-event_date'))
  $("#edit_event_modal  #event_id").val($($this).attr('data-id'));
 }