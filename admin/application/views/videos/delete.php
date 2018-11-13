<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Slet video</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{link_back}" class="btn btn-sm btn-outline-secondary">Tilbage til videoer</a>
              </div> 
            </div>
          </div>

<video width="320" height="240" controls>
  <source src="{video_link}" type="video/mp4">
</video>

<p>{video_desc}</p>
<h3>ARE YOU SURE YOU WANT TO DELETE THIS VIDEO?</h3>

<form method="POST">
  <button type="submit" class="btn btn-danger" name="delete">Delete</button>
  <a href="{cancel_link}" class="btn btn-info">Cancel</a>
</form> 