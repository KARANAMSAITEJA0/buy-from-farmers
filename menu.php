<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<html>
	<body>	
    <header id="header">
				<h1><a href="index.php"><img src="./img.png"  width="250" height="70"/></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="Login/profile.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"> MyCart</a></li>
						
						<li><a href="market.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
						
					</ul>
				</nav>
			</header>

	</body>
</html>
