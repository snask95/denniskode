<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Opdatering af sider</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til sider</a>
              </div> 
            </div>
          </div>

          
<form method="post">
<fieldset>
 
<div class="row">
  <!-- Text input-->
  <div class="form-group col-8 offset-md-2">
  <label class=" control-label">Side overskrift</label>  
  <input id="page_headline" name="page_headline" type="text"class="form-control input-md" value="{page_headline}">
  </div>
</div> 

<div class="row">
  <!-- Text input-->
  <div class="form-group col-8 offset-md-2">
     <!-- Textarea -->
    <label class="control-label" >Top tekst</label> 
      <textarea class="form-control summernote col-4" name="page_topcontent">{page_topcontent}</textarea>
       {validation_errors}
    </div>
</div>   

<div class="row">
  <!-- Textarea -->
  <div class="form-group col-8 offset-md-2"> 
    <label class="control-label">Brødtekst</label>
      <textarea class="form-control summernote col-4" name="page_content">{page_content}</textarea>
  </div>
</div>

  <!-- Button -->
  <div class="form-group offset-md-2">
    <div class="col-md-4">
      <button type="submit" id="submit" name="submit" class="btn btn-info">Opdater</button>
    </div>
  </div>

</fieldset>
</form>
