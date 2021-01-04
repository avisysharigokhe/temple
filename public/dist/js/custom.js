 var base_url = $("#base_url").val();
 $(function () {
    $('#events').DataTable({
      responsive: true
    });
    $('#news').DataTable({
      responsive: true
    });
    $('#about_vidyapati').DataTable({
      responsive: true
    });
    $('#about_temple').DataTable({
      responsive: true
    });
    $('#histories').DataTable({
      responsive: true
    });
  $('input[name="event_date"]').daterangepicker({
    singleDatePicker: true,
    timePicker: true,
    showDropdowns: true,
    // "startDate": "12/09/2020",
    minDate:false,
    minYear: parseInt(moment().format('YYYY'),10),
    maxYear: parseInt(moment().format('YYYY'),10)+1,
    locale: {
      format: 'M/DD/YYYY hh:mm A'
    }
  }, function(start, end, label) {
    var years = moment().diff(start, 'years');
 //   alert("You are " + years + " years old!");
  });
   $('input[name="news_date"]').daterangepicker({
    singleDatePicker: true,
    timePicker: true,
    showDropdowns: true,
    // "startDate": "12/09/2020",
    minDate:false,
    minYear: parseInt(moment().format('YYYY'),10),
    maxYear: parseInt(moment().format('YYYY'),10)+1,
    locale: {
      format: 'M/DD/YYYY hh:mm A'
    }
  }, function(start, end, label) {
    var years = moment().diff(start, 'years');
 //   alert("You are " + years + " years old!");
  });
  });

 $(document).ready(function(){
  // add event form validation
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
    //  edit event form validation
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
    // add news form validation
    $(".add_news_form").validate({
        rules:{
          news_title:{
            required:true
          },
          news_description:{
            required:true,
            minlength:"50"

          },
          news_photo:{
            // required:true,
           extension: "jpg|jpeg|png"

          },
          news_date:{
            required:true
          }
        },
        messages:{
          news_title:{
            required:"please enter news title"  
          },
          news_description:{
            required:"please enter news description",
            minlength:"please enter at least 100 character about news description"
          },
          news_photo:{
            required:"please enter news photo",
            extension:"please upload jpg, jpeg or jpeg image only"
          },
          news_date:{
            required:"please enter news date"  
          }

        }
    });
    //  edit news form valiation 
    $(".edit_news_form").validate({
        rules:{
          news_title:{
            required:true
          },
          news_description:{
            required:true,
            minlength:"50"

          },
          news_photos:{
            // required:true,
           extension: "jpg|jpeg|png"

          },
          news_date:{
            required:true
          },
          status:{
            required:true
          }
        },
        messages:{
          news_title:{
            required:"please enter news title"  
          },
          news_description:{
            required:"please enter news description",
            minlength:"please enter at least 100 character about news description"
          },
          news_photos:{
            required:"please enter news photo",
            extension:"please upload jpg, jpeg or jpeg image only"
          },
          news_date:{
            required:"please enter news date"  
          }

        }
    });
    // add about vidyapati form
    $(".add_about_vidyapati_form").validate({
        rules:{
          about_title:{
            required:true
          },
          about_description:{
            required:true,
            minlength:"50"

          },
          about_photo:{
            // required:true,
           extension: "jpg|jpeg|png"

          }
        },
        messages:{
          about_title:{
            required:"please enter about title"  
          },
          about_description:{
            required:"please enter about description",
            minlength:"please enter at least 100 character about description"
          },
          about_photo:{
            required:"please enter about photo",
            extension:"please upload jpg, jpeg or jpeg image only"
          }

        }
    });
    
      // add about vidyapati form
    $(".edit_about_vidyapati_form").validate({
        rules:{
          about_title:{
            required:true
          },
          about_description:{
            required:true,
            minlength:"50"

          },
          about_photos:{
            // required:true,
           extension: "jpg|jpeg|png"

          }
        },
        messages:{
          about_title:{
            required:"please enter about title"  
          },
          about_description:{
            required:"please enter about description",
            minlength:"please enter at least 100 character about description"
          },
          about_photos:{
            required:"please enter about photo",
            extension:"please upload jpg, jpeg or jpeg image only"
          }

        }
    });
      // add about temple form
    $(".edit_about_temple_form").validate({
        rules:{
          about_title:{
            required:true
          },
          about_description:{
            required:true,
            minlength:"50"

          },
          about_photos:{
            // required:true,
           extension: "jpg|jpeg|png"

          }
        },
        messages:{
          about_title:{
            required:"please enter about title"  
          },
          about_description:{
            required:"please enter about description",
            minlength:"please enter at least 100 character about description"
          },
          about_photos:{
            required:"please enter about photo",
            extension:"please upload jpg, jpeg or jpeg image only"
          }

        }
    });
      
    // $(document).on("click",".event_stataus",function() {
    //   $("#update_event").validate();
    // });
    // enable /disable event 
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
    // delete event
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


    // enable /disable news 
    $(document).on("click",".news_stataus",function() {
      var request = $.ajax({
        url: base_url+"/update_news_status",
        type: "POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {id : $(this).attr('data-id'),status : $(this).attr('data-status')},
        dataType: "json"
      });
      request.done(function(response) {
          location.reload(true);
      });
  });
    // delete news
    $(document).on("click",".delete_news",function() {
      var isConfirm = confirm("Are you sure you want to delete this news?");
      if(isConfirm) {
          var request = $.ajax({
          url: base_url+"/delete_news",
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

     // delete about us description
    $(document).on("click",".delete_about_vidyapati_description",function() {
      var isConfirm = confirm("Are you sure you want to delete this about description?");
      if(isConfirm) {
          var request = $.ajax({
          url: base_url+"/delete_about_vidyapati_description",
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
    
         // delete about us temple
    $(document).on("click",".delete_about_temple_description",function() {
      var isConfirm = confirm("Are you sure you want to delete this about description?");
      if(isConfirm) {
          var request = $.ajax({
          url: base_url+"/delete_about_temple_description",
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

 function show_news_desc_detail($this) {
    $("#news_description").html($($this).attr('data-description'))
 }
 function show_about_desc_detail($this) {
    $("#about_description").html($($this).attr('data-description'))
 }

 function show_about_temple_desc_detail($this) {
    $("#view_more_about_temple_modal #about_description").html($($this).attr('data-description'))
 }

 function set_event_data($this) {
  console.log($($this).attr('data-description'))
  $("#edit_event_modal #event_title").val($($this).attr('data-name'))
  $("#edit_event_modal  #event_description").val($($this).attr('data-description'))
  $("#edit_event_modal #status").html($($this).attr('data-status'))
  $("#edit_event_modal  #event_date").val($($this).attr('data-event_date'))
  $("#edit_event_modal  #event_id").val($($this).attr('data-id'));
 }

  function set_news_data($this) {
  console.log($($this).attr('data-description'))
  $("#edit_news_modal #news_title").val($($this).attr('data-name'))
  $("#edit_news_modal  #news_description").val($($this).attr('data-description'))
  $("#edit_news_modal #status").html($($this).attr('data-status'))
  $("#edit_news_modal  #news_date").val($($this).attr('data-news_date'))
  $("#edit_news_modal  #news_id").val($($this).attr('data-id'));
 }


   function set_about_vidyapati_data($this) {
  console.log($($this).attr('data-description'))
  $("#edit_about_vidyapati_modal #about_title").val($($this).attr('data-name'))
  $("#edit_about_vidyapati_modal  #about_description").summernote("code", $($this).attr('data-description'));
 // $("#edit_about_vidyapati_modal  #about_description").val($($this).attr('data-description'))
  $("#edit_about_vidyapati_modal  #about_id").val($($this).attr('data-id'));
 }


 function set_about_temple_data($this) {
  console.log($($this).attr('data-description'))
  $("#edit_about_temple_modal #about_title").val($($this).attr('data-name'))
  $("#edit_about_temple_modal  #about_description").summernote("code", $($this).attr('data-description'));
 // $("#edit_about_vidyapati_modal  #about_description").val($($this).attr('data-description'))
  $("#edit_about_temple_modal  #about_id").val($($this).attr('data-id'));
 }

 