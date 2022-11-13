<?php

	include('kycja.php'); 
	if ((isset($_SESSION['perdoruesi']) != '')) 
	{
		header('Location: ballina_admin.php');
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
		<title>Moduli Administratorit</title>
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
			

				<!-- Main -->
					<div id="main">
					<section>
					<br>
					
                                       <h3 style="text-aign:center;">Udhëzim</h3>
									<blockquote>Për t`u kycur në webaplikacion ju lutem kontaktone administratorin për krijimin e llogarisë</blockquote>
									<br>
						<!-- First Section -->
							
										<h2>Kycja ne Uebaplikacion</h2>
										<form method="post" action="">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="perdoruesi" id="perdoruesi" value="" placeholder="perdoruesi" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="password" name="password" id="password" value="" placeholder="fjalekalimi" />
												</div>
											
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" name="submit" value="Kycu" class="button" /></li>
														
													</ul>
												</div>
											
											
											</div>
											<br>
											<br>
											<br>
										</form>
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