<main style="background-image: url({skovlink});
		height: 2487px;
		background-repeat: no-repeat;
		background-position: center;">

		<?php 
			include 'mand.html';
		?>
		
    	<div id="scrollDiv"></div>
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-4">
					<video src="<?= base_url(); ?>assets/img/rollespil.mp4" controls></video>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="left"><a href="#">
						<img class="img-fluid" src="<?= base_url(); ?>assets/img/huse/forældreinfo.png" ></a> 
						<div class="right"><a href="#">
							<img class="rimg" src="<?= base_url(); ?>assets/img/huse/nyheder.png" ></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="arrangementer"><a href="#">
						<img class="img-fluid" src="<?= base_url(); ?>assets/img/huse/arrangementer.png" ></a>
						<div class="right"><a href="#">
							<img class="rimg" src="<?= base_url(); ?>assets/img/huse/blivmedlem.png"></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="galleri"><a href="#">
						<img class="img-fluid" src="<?= base_url(); ?>assets/img/huse/galleri.png"></a>
						<div class="right"><a href="#">
							<img class="contact" src="<?= base_url(); ?>assets/img/huse/kontakt.png"></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>


<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:30%; margin-left:43%; background-color: rgba(76,175,80,0.0); background-image: url({bglink}); background-repeat: no-repeat; background-size: contain; padding: 24px 10px;">
</button>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="<?= base_url(); ?>assets/img/man.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Login</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Email" name="uname">
      <input type="password" placeholder="Enter Password" name="psw">        
      <button type="submit">Login</button>
      <input type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>

	</main>