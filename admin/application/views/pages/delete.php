<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Slet side</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til sider</a>
              </div> 
            </div>
          </div>

Side ID: {page_id} <br>
Titel: {page_headline} <br>
Top tekst: {page_topcontent} <br>
Brødtekst: {page_content} <br>
Oprettet : {page_published} <br>
Level : {page_level} <br>
<br>
<h3>Er du sikker på at du vil slette denne side?</h3>

<form method="post">
	<button type="submit" class="btn btn-danger" name="delete">Delete</button>
	<a href="{link_back}" class="btn btn-info">Cancel</a>
</form>