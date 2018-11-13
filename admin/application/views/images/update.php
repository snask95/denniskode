<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Opdater billede</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til billeder</a>
              </div> 
            </div>
          </div>
  
<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>

<img src={image_file} class="img-fluid" alt="Responsive image">

<!-- File Button --> 
<div class="form-group">
  
  <label class="col-md-4 control-label" for="formFile"></label>
  <div class="col-md-4">
    <input id="formFile" name="formFile" class="input-file" type="file">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="image_desc">Description:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="image_desc" name="image_desc">{image_desc}</textarea>
  </div>
</div>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="formSubmit"></label>
  <div class="col-md-4">
    <button type="submit" id="formSubmit" name="formSubmit" class="btn btn-info">Opdater</button>
  </div>
</div>

</fieldset>
</form>
