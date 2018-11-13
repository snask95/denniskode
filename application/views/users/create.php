 <div class="row justify-content-around">
  <div class="col-4" style="height: 379px;">
    <img class="img-fluid" style="height: 379px; width: 379px;" src="<?= base_url(); ?>assets/img/man.png" >
  </div>

  <div class="col-6">
    <h1> Opret bruger </h1>
    <p> Her kan du oprette din bruger..
    og vi elsker masser af tekst.. <br>
    bla bla bal gjdfngfdfghjhgfdfghn <br>
    jhgfdchgfd <br> </p>
  </div> 
 </div>

<div class="row">
  <div class="col-12">

  <legend>Opret Bruger</legend>
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
  <fieldset>

  <!-- Text input-->
  <div class="form-group">
    {validation_errors}
    <label class="col-md-4 control-label" for="form_name">Navn</label>  
    <div class="col-md-4">
    <input id="form_name" name="form_name" type="text" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    {validation_errors}
    <label class="col-md-4 control-label" for="form_email">Email</label>  
    <div class="col-md-4">
    <input id="form_email" name="form_email" type="text" class="form-control input-md">
      
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">
    {validation_errors}
    <label class="col-md-4 control-label" for="form_password">Adgangskode</label>
    <div class="col-md-4">
      <input id="form_password" name="form_password" type="password" class="form-control input-md">
      
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="form_passwordpasword">Gentag adgangskode</label>
    <div class="col-md-4">
      <input id="form_passwordpasword" name="form_passwordpasword" type="password" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="form_character">Karakter navn (valgfri)</label>  
    <div class="col-md-4">
    <input id="form_character" name="form_character" type="text" placeholder="" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="form_charactertype">Karakter type (valgfri)</label>  
    <div class="col-md-4">
    <input id="form_charactertype" name="form_charactertype" type="text" placeholder="" class="form-control input-md">
      
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="form_desc">Karakter beskrivelse (valgfri)</label>
    <div class="col-md-4">                     
      <textarea class="form-control" id="form_desc" name="form_desc">skriv lidt om din karakter her.. </textarea>
    </div>
  </div>

  <!-- File Button --> 
  <div class="form-group">
    <label class="col-md-4 control-label" for="form_file">Upload billede (valgfri)</label>
    <div class="col-md-4">
      <input id="form_file" name="form_file" class="input-file" type="file">
    </div>
  </div>


  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="formSubmit"></label>
    <div class="col-md-4">
      <button type="submit" id="form_btn" name="form_btn" class="btn btn-success">Opret bruger</button>
    </div>
  </div>

  </fieldset>
  </form>

