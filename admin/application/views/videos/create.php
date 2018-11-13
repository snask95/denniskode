<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Ny video</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til videoer</a>
              </div> 
            </div>
          </div>

<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title_video">Video titel </label>  
  <div class="col-md-4">
  <input id="title_video" name="title_video" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="video_desc">Beskrivelse</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="video_desc" name="video_desc"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <div class="col-md-4">
    <input id="video_file" name="video_file" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="video_submit"></label>
  <div class="col-md-4">
    <button id="video_submit" name="video_submit" class="btn btn-primary">Upload</button>
  </div>
</div>

</fieldset>
</form>
