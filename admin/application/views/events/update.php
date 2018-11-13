<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Arrangementer</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til arrangementer</a>
              </div> 
            </div>
          </div>

<form method="post" class="form-horizontal">
<fieldset>

<div class="row">
  <img src="<?php echo base_url('assets/img/arrangementer.png')?>" class="col-4 img-fluid">
  <!-- Text input-->
  <div class="form-group col-4 offset-md-2">
     <!-- Textarea -->
    <label class="control-label" for="event_kalender">Kalender</label>
      <textarea class="form-control summernote col-2" name="kalender_content"></textarea>
    </div>
</div>   

  <!-- Textarea -->
  <div class="form-group"> 
    <label class="col-md-4 control-label" for="content">Brødtekst</label>
    {validation_errors}
      <textarea class="form-control summernote col-md-auto" name="content">{event_content}</textarea>
  </div>


  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="event_submit"></label>
    <div class="col-md-4">
      <button id="event_submit" name="event_submit" class="btn btn-success">Opret</button>
    </div>
  </div>



</fieldset>
</form>
