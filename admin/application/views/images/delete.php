<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Slet Billede</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til billeder</a>
              </div> 
            </div>
          </div>

<img src="{image_file}" class="img-fluid" alt="Responsive image"> 
  <br>
Billede ID: {image_id} <br>
Beskrivelse: {image_desc} <br>
Oprettet: {image_published} <br>
Level : {image_level} <br>
<br>
<h3>Er du sikker på at du vil slette dette billede?</h3>

<form method="post">
	<button type="submit" class="btn btn-danger" name="delete">Delete</button>
	<a href="{link_back}" class="btn btn-info">Cancel</a>
</form>