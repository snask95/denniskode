<div class="col-md-8 blog-main">
<form class="form-horizontal" method="post">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="user_email">E-Mail</label>  
  <div class="col-md-4">
  <input id="user_email" name="user_email" type="text" placeholder="E-Mail" class="form-control input-md"><br>
  <span style="color: red;">{email_error}</span>
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="user_password">Password</label>
  <div class="col-md-4">
    <input id="user_password" name="user_password" type="password" placeholder="Password" class="form-control input-md"><br>
  <span style="color: red;">{password_error}</span>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="user_submit"></label>
  <div class="col-md-4">
    <button type="submit" id="user_submit" name="user_submit" class="btn btn-primary">Login</button>
  </div>
</div>

</fieldset>
</form>
</div>