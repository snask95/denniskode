<div class="admin_bg">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Videoer</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{create_link}" class="btn btn-sm btn-outline-secondary">Ny video</a>
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
      <th scope="col">Arrangemeter Id</th>
      <th scope="col">Titel</th>
      <th scope="col">Beskrivelse</th>
      <th scope="col">Link</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
      {videos}
      <tr>
        <td>{video_id}</td>
        <td>{video_event_id}</td>
        <td>{video_title}</td>
        <td>{video_desc}</td>
        <td>{video_link}</td>
        <td>

        <div class="btn-group mr-2" >
          <a href="{readlink}" class="btn btn-sm btn-outline-secondary">Se</a>
          <a href="{updatelink}" class="btn btn-sm btn-outline-secondary">Rediger</a>
          <a href="{deletelink}" class="btn btn-sm btn-outline-secondary">Slet</a>
        </div>
          

        </td>
      </tr>
      {/videos}
    </tbody>
</table>
</div>