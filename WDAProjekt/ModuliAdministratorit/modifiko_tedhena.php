<?php

	include("konfigurimi.php");	
?>
<?php

include_once("kontrolla.php");


$result = mysqli_query($conn,
"SELECT * FROM umvlo_tedhenat ORDER BY ID_Dhenat DESC");
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
                   
				   <div id="main">

		<!-- Main -->
			<section id="intro" class="main">
								<div class="spotlight">
											<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
                                   </div>

                                    <div class="table-wrapper">
									<form method="post" action="shto_tdhena.php">
										<div class="table-wrapper">
										
											<div class="col-6 col-12-small">
												<input type="text" name="Titulli" id="Titulli" value="" placeholder="Titulli" />
											
											<br>
											<input type="text" name="Pershrkimi" id="Pershkrimi" value="" placeholder="Pershkrimi" />
											<br>
												<input type="text" name="Dosja" id="Dosja" value="" placeholder="Dosja" />
											<br>
												<input type="text" name="PamjaFaqes" id="PamjaFaqes" value="" placeholder="PamjaFaqes" />
											</div>
											<br>
											<div class="col-6 col-12-xsmall">
												<ul class="actions">
													<li><input type="submit" name="shto_tdhena" value="Shto"  /></li>
												
												</ul>
											</div>
										</div>
										
									</form>
									</div>
							

<div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>Kërko të dhënat për modifikim për fshirje</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Titullin ose Pamjen e faqes" value="%"/>
</td>
<td> <input type="submit" value="Kërko" /></td>
</tr>
</table> 
</div>

</form> 
	<div class="table-wrapper">
<table width='80%' border=0>
	<div class="table-wrapper">
	<tr bgcolor='#222222'>
		<td>Titulli</td>
		<td>Pershkrimi</td>
		<td>Dosja</td>
		<td>PamjaFaqes</td>
		<td>Modifiko</td>
		<td>Fshije</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM umvlo_tedhenat 
WHERE Titulli LIKE '%".$term."%' 
OR  PamjaFaqes LIKE '%".$term."%'");
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['Titulli']."</td>";
		echo "<td>".$row['Pershkrimi']."</td>";
		echo "<td>".$row['Dosja']."</td>";	
		echo "<td>".$row['PamjaFaqes']."</td>";
		echo "<td><a href=\"perditso_dhenat.php?ID_Dhenat=$row[ID_Dhenat]\" class='button' >Modifiko</a></td>";
		
		echo "<td><a href=\"fshije_dhenat.php?ID_Dhenat=$row[ID_Dhenat]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\" class='button'>Fshijë</a>
		</td></tr>";		
	}

}

?>
</div>
	</table>
			

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