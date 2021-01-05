<!-- View Event Description Modal -->
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
                    <label for="start">Event Date</label>                
                    <input type="text" id="event_date" name="event_date" class="form-control" >
                    @if($errors->has('event_date'))
            <div class="error">{{ $errors->first('event_date') }}</div>
          @endif 
                </div>
                <input type="hidden" name="event_id" id="event_id" value="">
                <button type="submit" id="update_event" name="update_event" class="btn btn-sm btn-primary
                  "  value="Update">Update</button>
                </div>
                </div>
              </form>
        </div>
        
      </div>
      
    </div>
  </div>


  <!-- View News Details Modal -->
  <div class="modal fade" id="view_more_news_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">View Description Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p id="news_description"></p>
        </div>
        
      </div>
      
    </div>
  </div>

  <!-- Edit News Model -->

  <div class="modal fade" id="edit_news_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit News</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <form role="form" method="post" enctype="multipart/form-data" action="{{url('/update_news')}}" class="edit_news_form" >
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>News Title</label>
                  <input type="text"  name="news_title" id="news_title" class="form-control" placeholder="Title" >
                  @if($errors->has('news_title'))
            <div class="error">{{ $errors->first('news_title') }}</div>
          @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>News Description</label>
                  <textarea class="form-control" name="news_description" id="news_description" rows="3" placeholder="Description"></textarea>
                  @if($errors->has('news_description'))
            <div class="error">{{ $errors->first('news_description') }}</div>
          @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">News Photo</label>
                  <input type="file" name="news_photo" id="news_photo" >  
                  @if($errors->has('news_photo'))
            <div class="error">{{ $errors->first('news_photo') }}</div>
          @endif                
                </div>

                <div class="form-group">
                    <label for="start">News Date</label>                
                    <input type="text" id="news_date" name="news_date" class="form-control" >
                    @if($errors->has('news_date'))
            <div class="error">{{ $errors->first('news_date') }}</div>
          @endif 
                </div>
                <input type="hidden" name="news_id" id="news_id" value="">
                <button type="submit" id="update_news" name="update_news" class="btn btn-sm btn-primary
                  "  value="Update">Update</button>
                </div>
                </div>
              </form>
        </div>
        
      </div>
      
    </div>
  </div>

  <!-- View About Vidyapati Modal -->

  <div class="modal fade" id="view_more_about_vidyapati_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">View Description Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p id="about_description"></p>
        </div>
        
      </div>
      
    </div>
  </div>


   <!-- Edit About Us Vidyapati  Model -->

  <div class="modal fade" id="edit_about_vidyapati_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit About Vidyapati</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <form role="form" method="post" enctype="multipart/form-data" action="{{url('/update_about_vidyapati')}}" class="edit_about_vidyapati_form" >
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>About Title</label>
                  <input type="text"  name="about_title" id="about_title" class="form-control" placeholder="Title" >
                  @if($errors->has('about_title'))
            <div class="error">{{ $errors->first('about_title') }}</div>
          @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>News Description</label>
                  <textarea class="textarea about_us_text_area" name="about_description"  id="about_description"
                        placeholder="Place some text here"  ></textarea>
                  @if($errors->has('about_description'))
            <div class="error">{{ $errors->first('about_description') }}</div>
          @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">About Photo</label>
                  <input type="file" name="about_photos" id="about_photos" >  
                  @if($errors->has('about_photos'))
            <div class="error">{{ $errors->first('about_photos') }}</div>
          @endif                
                </div>
 
                
                <input type="hidden" name="about_id" id="about_id" value="">
                <button type="submit" id="update_about_vidyapati" name="update_about_vidyapati" class="btn btn-sm btn-primary
                  "  value="Update">Update</button>
                </div>
                </div>
              </form>
        </div>
        
      </div>
      
    </div>
  </div>


  <!-- View About Temple Modal -->

  <div class="modal fade" id="view_more_about_temple_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">View Description Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p id="about_description"></p>
        </div>
        
      </div>
      
    </div>
  </div>



   <!-- Edit About Us Temple  Model -->

  <div class="modal fade" id="edit_about_temple_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit About Temple</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <form role="form" method="post" enctype="multipart/form-data" action="{{url('/update_about_temple')}}" class="edit_about_temple_form" >
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>About Title</label>
                  <input type="text"  name="about_title" id="about_title" class="form-control" placeholder="Title" >
                  @if($errors->has('about_title'))
            <div class="error">{{ $errors->first('about_title') }}</div>
          @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>News Description</label>
                  <textarea class="textarea about_us_text_area" name="about_description"  id="about_description"
                        placeholder="Place some text here"  ></textarea>
                  @if($errors->has('about_description'))
            <div class="error">{{ $errors->first('about_description') }}</div>
          @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">About Photo</label>
                  <input type="file" name="about_photos" id="about_photos" >  
                  @if($errors->has('about_photos'))
            <div class="error">{{ $errors->first('about_photos') }}</div>
          @endif                
                </div>
 
                
                <input type="hidden" name="about_id" id="about_id" value="">
                <button type="submit" id="update_about_vidyapati" name="update_about_vidyapati" class="btn btn-sm btn-primary
                  "  value="Update">Update</button>
                </div>
                </div>
              </form>
        </div>
        
      </div>
      
    </div>
  </div>

  
  <!-- View About Ugna Modal -->

  <div class="modal fade" id="view_more_about_ugna_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">View Description Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p id="about_description"></p>
        </div>
        
      </div>
      
    </div>
  </div>

    <!-- Edit About Us Ugna Model -->

    <div class="modal fade" id="edit_about_ugna_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit About Ugna</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <form role="form" method="post" enctype="multipart/form-data" action="{{url('/update_about_ugna')}}" class="edit_about_ugna_form" >
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>About Title</label>
                  <input type="text"  name="about_title" id="about_title" class="form-control" placeholder="Title" >
                  @if($errors->has('about_title'))
            <div class="error">{{ $errors->first('about_title') }}</div>
          @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>News Description</label>
                  <textarea class="textarea about_us_text_area" name="about_description"  id="about_description"
                        placeholder="Place some text here"  ></textarea>
                  @if($errors->has('about_description'))
            <div class="error">{{ $errors->first('about_description') }}</div>
          @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">About Photo</label>
                  <input type="file" name="about_photos" id="about_photos" >  
                  @if($errors->has('about_photos'))
            <div class="error">{{ $errors->first('about_photos') }}</div>
          @endif                
                </div>
 
                
                <input type="hidden" name="about_id" id="about_id" value="">
                <button type="submit" id="update_about_ugna" name="update_about_ugna" class="btn btn-sm btn-primary
                  "value="Update">Update</button>
                </div>
                </div>
              </form>
        </div>
        
      </div>
      
    </div>
  </div>