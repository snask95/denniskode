<div class="row justify-content-around">
				<div class="col-4" style="height: 379px;">
		<img class="img-fluid" style="height: 379px; width: 379px;" src="<?= base_url(); ?>assets/img/kontakt.png">
				</div>
				<div class="col-6">
					{page_topcontent}
				</div>
				<div class="container">
					<div class="row">
						<form class="form-horizontal">
						<!-- Form Name -->
						<legend>Kontakt os</legend>

						<!-- Text input-->
						<div class="form-group">
  							<label class="col-md-12 control-label" for="form_navn"></label>  
  							<div class="col-md-12">
  								<input id="form_navn" name="form_navn" type="text" placeholder="Dit navn" class="form-control input-md" required="">
  							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
  							<label class="col-md-12 control-label" for="form_mail"></label>  
  							<div class="col-md-12">
  								<input id="form_mail" name="form_mail" type="text" placeholder="Din Email" class="form-control input-md" required="">
 					 		</div>
						</div>

						<!-- Textarea -->
						<div class="form-group">
  							<label class="col-md-12 control-label" for="form_besked"></label>
  							<div class="col-md-12">                     
   								<textarea class="form-control" id="form_besked" name="form_besked">Skriv din besked her</textarea>
	  						</div>
						</div>

						<!-- Button -->
						<div class="form-group">
  							<label class="col-md-8 control-label" for="form_submit"></label>
  							<div class="col-md-8">
    							<button id="form_submit" name="form_submit" class="btn btn-primary">Send</button>
  							</div>
						</div>
						</form>
					</div>
				</div>
			</div>