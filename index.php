<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Buy from Farmers</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
	</head>
	<?php
		require 'menu.php';
	?>
			<section id="banner" class="wrapper">
				<div class="container">
				<h2>Buy from Farmers</h2>
				<p>Your Product Our Market</p>
				<br><br>
				<center>
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
						</div>

						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">SIGNUP</button>
						</div>
					</div>
				</center>
			</section>
			<div id="id01" class="modal">
  <form class="modal-content animate" action="Login/login.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
    <h3>Login</h3>
							<form method="post" action="Login/login.php">
								<div class="row uniform 50%">
									<div class="7u$">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName(వినియోగదారు పేరు)" style="width:80%" required/>
									</div>
									<div class="7u$">
										<input type="password" name="pass" id="pass" value="" placeholder="Password(పాస్వర్డ్)" style="width:80%" required/>
									</div>
								</div>
									<div class="row uniform">
										<p>
				                            <b>Category : </a>
				                        </p>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="farmer1" name="category" value="1" checked>
				                            <label for="farmer1">Farmer</label>
				                        </div>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="buyer1" name="category" value="0">
				                            <label for="buyer1">Buyer</label>
				                        </div>
									</div>
									<center>
									<div class="row uniform">
										<div class="7u 12u$(small)">
											<input type="submit" value="Login" />
										</div>
									</div>
									</center>
								</div>
							</form>
						</section>
</div>
    </div>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  <form class="modal-content animate" action="Login/signUp.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
<section>
							<h3>SignUp</h3>
							<form method="post" action="Login/signUp.php">
								<center>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name(పేరు)" required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName(వినియోగదారు పేరు)" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number(ఫోను నంబరు)" required/>
									</div>

									<div class="3u 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email(ఇమెయిల్)" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
			                            <input type="password" name="password" id="password" value="" placeholder="Password(పాస్వర్డ్)" required/>
			                        </div>
			                        <div class="3u 12u$(xsmall)">
			                            <input type="password" name="pass" id="pass" value="" placeholder="Retype Password(రీటైప్)" required/>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="addr" id="addr" value="" placeholder="Address(చిరునామా)" style="width:80%" required/>
									</div>
								</div>
								<div class="row uniform">
									<p>
			                            <b>Category : </b>
			                        </p>
			                        <div class="3u 12u$(small)">
			                            <input type="radio" id="farmer2" name="category" value="1" checked>
			                            <label for="farmer2">Farmer</label>
			                        </div>
			                        <div class="3u 12u$(small)">
			                            <input type="radio" id="buyer2" name="category" value="0">
			                            <label for="buyer2">Buyer</label>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(small)">
										<input type="submit" value="Submit" name="submit" class="special" /></li>
									</div>
									<div class="3u 12u$(small)">
										<input type="reset" value="Reset" name="reset"/></li>
									</div>
								</div>
							</center>
							</form>
						</section>
    </div>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal1= document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>
	</body>
</html>