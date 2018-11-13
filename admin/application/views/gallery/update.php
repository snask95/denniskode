<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Opdater galleri</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til galleri</a>
              </div> 
            </div>
          </div>
  
<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Textarea -->
<div class="form-group">
  
  <label class="col-md-4 control-label">Navn på galleri</label>
  <div class="col-md-4">                     
    <input type="text" class="form-control" id="gallery_name" name="gallery_name">
    {validation_errors}
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="formSubmit"></label>
  <div class="col-md-4">
    <button type="submit" id="formSubmit" name="formSubmit" class="btn btn-success">Opdater galleri</button>
  </div>
</div>

</fieldset>
</form>
