 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Opdater bruger</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til bruger</a>
        </div>
      </div>
  </div>

<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->
<div class="form-group">
  {validation_errors}
  <label class="col-md-4 control-label" for="form_name">Navn</label>  
  <div class="col-md-4">
  <input id="form_name" name="form_name" type="text" value="{user_name}" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  {validation_errors}
  <label class="col-md-4 control-label" for="form_email">Email</label>  
  <div class="col-md-4">
  <input id="form_email" name="form_email" type="text" value="{user_email}" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="form_character">Karakter navn</label>  
  <div class="col-md-4">
  <input id="form_character" name="form_character" type="text" value="{user_character}" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="form_charactertype">Karakter type</label>  
  <div class="col-md-4">
  <input id="form_charactertype" name="form_charactertype" type="text" value="{user_charactertype}" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="form_desc">Karakter beskrivelse</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="form_desc" name="form_desc">{user_desc}</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="form_file">Upload billede</label>
  <div class="col-md-4">
    <input id="form_file" name="form_file" class="input-file" type="file">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="user_level">Level</label>
  <div class="col-md-4">
    <select id="form_level" name="form_level" class="form-control">
      <option value="0">Afventer</option>
      <option value="1" selected>Bruger</option>
      <option value="2">Admin</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="formSubmit"></label>
  <div class="col-md-4">
    <button type="submit" id="form_btn" name="form_btn" class="btn btn-info">Opdater</button>
  </div>
</div>

</fieldset>
</form>
