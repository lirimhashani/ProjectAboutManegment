<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php 
include_once("konfigurimi.php")
?>
<html>
	<head>
		<title>UMVLO</title>
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
					 <nav id="nav">	
					<?php include_once("meny.php"); ?>
					</nav>
				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="intro" class="main">


								<!-- Form -->
								<div class="spotlight">
									<section>
										<h2>Kontakti</h2>
										<form method="post" action="shtokontakt.php">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="Emri" id="Emri" value="" placeholder="Emri" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="text" name="Emaili" id="Emaili" value="" placeholder="Email" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="text" name="Subjekti" id="Subjekti" value="" placeholder="Subjekti" />
												</div>
												
												<div class="col-12">
													<textarea name="Mesazhi" id="Mesazhi" placeholder="Shenoni Mesazhin tuaj" rows="6"></textarea>
												</div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" name="shtokontakt" value="Dergo" class="button" /></li>
														
													</ul>
												</div>
											</div>
										</form>
									</section>

								<!-- Image -->
								</div>
								</section>

			<!-- Footer -->
						<?php include_once("kemba.php"); ?>
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