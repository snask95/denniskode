<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Slet Arrangement</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til arrangementer</a>
              </div> 
            </div>
          </div>

Event ID: {event_id} <br>
Titel: {event_title} <br>
Indehold: {event_content} <br>
Oprettet : {event_published} <br>
Level : {event_level} <br>
<br>
<h3>Er du sikker på at du vil slette dette arrangement?</h3>

<form method="post">
	<button type="submit" class="btn btn-danger" name="delete">Delete</button>
	<a href="{link_back}" class="btn btn-info">Cancel</a>
</form>