<!-- Modal -->
  <div class="modal fade" id="view_more_event_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">View Description Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p id="event_description"></p>
        </div>
        
      </div>
      
    </div>
  </div>

  <!-- Edit Event Model -->

  <div class="modal fade" id="edit_event_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <form role="form" method="post" enctype="multipart/form-data" action="{{url('/update_event')}}" class="edit_event_form" >
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>Event Title</label>
                  <input type="text"  name="event_title" id="event_title" class="form-control" placeholder="Title" >
                  @if($errors->has('event_title'))
            <div class="error">{{ $errors->first('event_title') }}</div>
          @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Event Description</label>
                  <textarea class="form-control" name="event_description" id="event_description" rows="3" placeholder="Description"></textarea>
                  @if($errors->has('event_description'))
            <div class="error">{{ $errors->first('event_description') }}</div>
          @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Event Photo</label>
                  <input type="file" name="event_photo" id="event_photo" >  
                  @if($errors->has('event_photo'))
            <div class="error">{{ $errors->first('event_photo') }}</div>
          @endif                
                </div>

                <div class="form-group">
                  <label for="event_status">Event Status</label>
                  <select id="event_status" name="event_status" class="form-control">
                  <option value="">Select Event Status</option>
                  <option value="saab">Saab 95</option>
                  <option value="mercedes">Mercedes SLK</option>
                  <option value="audi">Audi TT</option>
                </select>
               
                  @if($errors->has('event_status'))
            <div class="error">{{ $errors->first('event_status') }}</div>
          @endif                
                </div>

                <div class="form-group">
                    <label for="start">Event Date</label>                
                    <input type="text" id="event_date" name="event_date" class="form-control" >
                    @if($errors->has('event_date'))
            <div class="error">{{ $errors->first('event_date') }}</div>
          @endif 
                </div>
                <input type="hidden" name="event_id" id="event_id" value="">
                <input type="button" id="update_event" name="update_event" class="btn btn-sm btn-primary
                  "  value="Update">
                </div>
                </div>
              </form>
        </div>
        
      </div>
      
    </div>
  </div>