<?php 
	include_once("kontrolla.php");
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

								<header class="major">
									<h2>Menaxho te dhenat e faqes</h2>
								</header>
								<ul class="features">
								<li>
										<span class="icon major style5 fa-gem"></span>
										<h3>Menaxho te dhenat</h3>
										
										<a href="modifiko_tedhena.php" class="button">Vazhdo</a>
									</li>
									
									<li>
										<span class="icon major style5 fa-gem"></span>
										<h3>Menaxho  Videolojrat</h3>
										
										<a href="Videolojrat.php" class="button">Vazhdo</a>
									</li>
									<li>
										<span class="icon major style5 fa-gem"></span>
										<h3>Menaxho Platformen</h3>
									
										<a href="Platforma.php" class="button">Vazhdo</a>
									</li>
								</ul>

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