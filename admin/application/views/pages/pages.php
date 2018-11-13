<div class="admin_bg">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Sider</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
              <a href="{create_link}" class="btn btn-sm btn-outline-secondary">Ny side</a>
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
        <th scope="col">Overskrift</th>
        <th scope="col">Oprettelses dato</th>
        <th scope="col">Level</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
      <tbody>
        {pages}
        <tr>
          <td>{page_id}</td>
          <td>{page_headline}</td>    
          <td>{page_published}</td>
          <td>{page_level}</td>
       
          <td>
            <div class="btn-group mr-2" >
              <a href="{readlink}" class="btn btn-sm btn-outline-dark">Se</a>
              <a href="{updatelink}" class="btn btn-sm btn-outline-dark">Rediger</a>
              <a href="{deletelink}" class="btn btn-sm btn-outline-dark">Slet</a>
            </div>
          </td>
        </tr>
        {/pages}
      </tbody>
  </table>
</div>  