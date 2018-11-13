<div class="admin_bg">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Arrangementer</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{create_link}" class="btn btn-sm btn-outline-secondary">Nyt arrangement</a>
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
      <th scope="col">Titel</th>
      <th scope="col">Beskrivelse</th>
      <th scope="col">Oprettet</th>
      <th scope="col">Level</th>
    </tr>
  </thead>
  <tbody>
    {events}
    <tr>
      <td>{event_id}</td>
      <td>{event_title}</td>
      <td>{event_content}</td>
      <td>{event_published}</td>
      <td>{event_level}</td>
      <td>
        <div class="btn-group mr-2">
          <a href="{updatelink}" class="btn btn-sm btn-outline-secondary">Edit</a>
          <a href="{deletelink}" class="btn btn-sm btn-outline-secondary">Delete</a>
        </div>
      </td>
    </tr>
    {/events}
  </tbody>
</table>  
</div>