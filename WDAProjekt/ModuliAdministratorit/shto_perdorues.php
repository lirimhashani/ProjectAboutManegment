<?php 
include_once("kontrolla.php")
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

					<section id="intro" class="main">
								<div class="spotlight">
								

				<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
				</div>
					
					
														

								<!-- Buttons -->
									

								<!-- Form -->
									<h3>Shto të dhënat e përdoruesit</h3>
									
									<div class="table-wrapper">
									<form method="post" action="shto.php">
										<div class="table-wrapper">
										
											<div class="col-6 col-12-small">
												<input type="text" name="perdoruesi" id="perdrouesi" value="" placeholder="Përdoruesi" />
											
											<br>
												<input type="password" name="password" id="password" value="" placeholder="Fjalëkalimi" />
											<br>
												<input type="email" name="email" id="email" value="" placeholder="Email-i" />
											</div>
											<br>
											<div class="col-6 col-12-xsmall">
												<ul class="actions">
													<li><input type="submit" name="shto" value="Shto"  /></li>
												
												</ul>
											</div>
										</div>
										
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