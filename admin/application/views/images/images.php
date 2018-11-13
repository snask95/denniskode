<div class="admin_bg">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Billeder</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{create_link}" class="btn btn-sm btn-outline-secondary">Nyt billede</a>
        </div> 
        <div> 
          <a href="{index_link}" class="btn btn-sm btn-outline-secondary">Tilbage til forsiden</a>
        </div>
    </div>
</div>

{images}
<div class="col-4" style="text-align: center"> 
  <img src="{image_file}" class="img-fluid" alt="Responsive image"> 
    <br>
      <div class="btn-group mr-2" style="margin-top: 5px; margin-bottom: 5px;">
        <a href="{readlink}" class="btn btn-sm btn-outline-secondary">Se</a>
        <a href="{updatelink}" class="btn btn-sm btn-outline-secondary">Rediger</a>
        <a href="{deletelink}" class="btn btn-sm btn-outline-secondary">Slet</a>
      </div>
</div>
{/images}
</div>