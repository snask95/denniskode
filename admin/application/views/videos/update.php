<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Opdater video</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til videoer</a>
              </div> 
            </div>
          </div>

<video width="320" height="240" controls>
  <source src="{video_link}" type="video/mp4">
</video>

<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>

<!-- File Button --> 
<div class="form-group">
  <div class="col-md-4">
    <input id="video_file" name="video_file" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title_video">Video titel </label>  
  <div class="col-md-4">
  <input id="title_video" name="title_video" type="text" value="{video_title}" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="video_desc">Beskrivelse</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="video_desc" name="video_desc">{video_desc}</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="video_submit"></label>
  <div class="col-md-4">
    <button id="video_submit" name="video_submit" class="btn btn-primary">Opdater</button>
  </div>
</div>

</fieldset>
</form>
