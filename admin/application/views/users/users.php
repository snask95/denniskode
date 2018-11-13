<div class="admin_bg">  
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Brugere</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <a href="{create_link}" class="btn btn-sm btn-outline-secondary">Opret bruger</a>
        </div>
        <div> 
          <a href="{index_link}" class="btn btn-sm btn-outline-secondary">Tilbage til forsiden</a>
        </div> 
      </div>
  </div>
  

            
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Navn</th>
      <th scope="col">Karakternavn</th>
      <th scope="col">Email</th>
      <th scope="col">Level</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
      {users}
      <tr>
        <td>{user_id}</td>
        <td>{user_name}</td>
        <td>{user_character}</td>
        <td>{user_email}</td>
        <td>{user_level}</td>
        <td>

              <div class="btn-group mr-2">
                <a href="{updatelink}" class="btn btn-sm btn-outline-secondary">Edit</a>
                <a href="{readlink}" class="btn btn-sm btn-outline-secondary">Read</a>
                <a href="{deletelink}" class="btn btn-sm btn-outline-secondary">Delete</a>

              </div>
          

        </td>
      </tr>
      {/users}
    </tbody>
</table>
</div>
