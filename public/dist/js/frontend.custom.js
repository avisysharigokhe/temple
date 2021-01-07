$(function () {
    $("#accordion1").readMore({
    
      readMoreLabel:"Read more",  
    
      readLessLabel:"Read less",
      lines: 2
    
    
        })
      });

function set_event_description($this) {
	console.log($this);
	$("#view_more_event_modal #event_description").html($($this).attr('data-description'))
}