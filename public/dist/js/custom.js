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


 })


 function show_detail($this){
  $("#event_title").html($($this).attr('data-name'))
  $("#event_description").html($($this).attr('data-description'))
  $("#event_status").html($($this).attr('data-status'))
  $("#event_date").html($($this).attr('data-event_date'))
  $("#event_photo").html('<img class="direct-chat-img"  style="float:none" src="'+$($this).attr('data-photo')+'" alt="message user image">')
 }