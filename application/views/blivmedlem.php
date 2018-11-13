<div class="row justify-content-around">
	<div class="col-4" style="height: 379px;">
		<img class="img-fluid" style="height: 379px; width: 379px;" src="<?= base_url(); ?>assets/img/blivmedlem.png" >
	</div>

	<div class="col-6">
		{page_topcontent}
		<h5>Her kan du hente indmeldnings <a href="#">blanketten</a></h5>
		<br>
		<p> Længere nede på siden kan du også oprette dig som bruger men det bliver først aktiv når vi har fået underskrift af forældre </p>
    
	</div>

	<div class="col-4">	
	<legend style="margin-left: 15px;">Opret Bruger</legend>
  	<form class="form-horizontal" method="post" enctype="multipart/form-data">
  	<fieldset>

  <!-- Text input-->
  <div class="form-group">
    {validation_errors}
    <label class="col-md-4 control-label" for="form_name">Navn</label>  
    <div class="col-md-4" style="max-width: 100%">
    <input style="margin: 0px;" id="form_name" name="form_name" type="text" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    {validation_errors}
    <label class="col-md-4 control-label" for="form_email">Email</label>  
    <div class="col-md-4" style="max-width: 100%">
    <input  style="margin: 0px;" id="form_email" name="form_email" type="text" class="form-control input-md">
      
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">
    {validation_errors}
    <label class="col-md-4 control-label" for="form_password">Adgangskode</label>
    <div class="col-md-4" style="max-width: 100%">
      <input style="margin: 0px;" id="form_password" name="form_password" type="password" class="form-control input-md">
      
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="form_passwordpasword">Gentag adgangskode</label>
    <div class="col-md-4" style="max-width: 100%">

      <input style="margin: 0px;" id="form_passwordpasword" name="form_passwordpasword" type="password" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="form_character">Karakter navn (valgfri)</label>  
    <div class="col-md-4" style="max-width: 100%">
    <input style="margin: 0px;" id="form_character" name="form_character" type="text" placeholder="" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="form_charactertype">Karakter type (valgfri)</label>  
    <div class="col-md-4" style="max-width: 100%">
    <input style="margin: 0px;" id="form_charactertype" name="form_charactertype" type="text" placeholder="" class="form-control input-md">
      
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="form_desc">Karakter beskrivelse (valgfri)</label>
    <div class="col-md-4" style="max-width: 91%; height: 160px;">                     
      <textarea  style="height: 160px;" class="form-control" id="form_desc" name="form_desc">skriv lidt om din karakter her.. </textarea>
    </div>
  </div>

  <!-- File Button --> 
  <div class="form-group" style="max-width: 100%">
    <label class="col-md-4 control-label" for="form_file">Upload billede (valgfri)</label>
    <div class="col-md-4">
      <input  style="margin: 0px;" id="form_file" name="form_file" class="input-file" type="file">
    </div>
  </div>


  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="formSubmit"></label>
    <div class="col-md-4">
      <button style= "margin: 0px;" type="submit" id="form_btn" name="form_btn" class="btn btn-success">Opret bruger</button>
    </div>
  </div>

  </fieldset>
  </form>
						
	</div>

	<div class="col-6">
		{page_content}
		<br>
	<div>

</div>
					
				