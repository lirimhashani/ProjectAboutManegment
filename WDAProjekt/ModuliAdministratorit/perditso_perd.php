<?php

	include("kontrolla.php");	
?>
<?php

include_once("konfigurimi.php");

if(isset($_POST['perditso_perd']))
{	
	$pid = $_POST['pid'];
	
	$perdoruesi=$_POST['perdoruesi'];
	$password=MD5($_POST['password']);
	$email=$_POST['email'];	
	

	if(empty($perdoruesi) || empty($password) || empty($email)) {	
			
		if(empty($perdoruesi)) {
			echo "<font color='red'>perdoruesi fusha eshte e zbrazet</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>fjalekalimi fusha eshte e zbrazet</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>email fusha eshte e zbrazet</font><br/>";
		}		
	} else {	
	
		mysqli_query($conn,"SET @id = ${pid}");
		mysqli_query($conn,"SET @prd = '${perdoruesi}'");
		mysqli_query($conn,"SET @pas = '${password}'");
		mysqli_query($conn,"SET @em = '${email}'");
		$result = mysqli_query($conn,"CALL perditso_perdorues(@prd,@pas,@em,@id)");
		
		
		header("Location: modifiko_perdorues.php");
	}
}
?>
<?php

$pid = $_GET['pid'];


$result = mysqli_query($conn,"SELECT * FROM umvlo_perdoruesi WHERE pid=$pid");

while($res = mysqli_fetch_array($result))
{
	$perdoruesi = $res['perdoruesi'];
	$password = $res['password'];
	$email = $res['email'];
}
?>


<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>UMVLO-Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<?php include_once("koka.php"); ?>
                     </header>

				<!-- Nav -->
					<nav id="nav">	
					<?php include_once("meny.php"); ?>
                  </nav>

				<!-- Main -->
					<div id="main">

						<!-- First Section -->
							<section id="first" class="main special">
							<div class="spotlight">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
			</div>

<div class="col-6 col-12-xsmall">
	<form name="form1" method="post" action="">
	
	<h3>Modifiko të dhënat e përdoruesit</h3>

			
				Përdoruesi
				<input type="text" name="perdoruesi" value='<?php echo $perdoruesi;?>' />
				<br>
				Fjalëkalimi
				<input type="text" name="password" value='<?php echo $password;?>' />
				<br>
				Email-i
				<input type="text" name="email" value='<?php echo $email;?>' />
				<br >
				<input type="hidden" name="pid" value='<?php echo $_GET['pid'];?>' />
				<input type="submit" name="perditso_perd" value="Modifiko">
		
		
	</form>
	</div>

						
				</section>
		<!-- Footer -->
			<?php include_once("kemba.php")?>
			</div>
          </div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>