<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Slet bruger</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til brugere</a>
              </div> 
            </div>
          </div>

<img src="{user_image}" class="img-fluid" alt="Responsive image"> <br>

Bruger ID: {user_id} <br>
Bruger navn: {user_name} <br>
Bruger email: {user_email} <br>
<br>
<h3>Er du sikker på at du vil slette denne bruger?</h3>

<form method="post">
  <button type="submit" class="btn btn-danger" name="delete">Delete</button>
  <a href="{link_back}" class="btn btn-info">Cancel</a>
</form>