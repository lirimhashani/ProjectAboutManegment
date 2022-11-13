<?php

	include("kontrolla.php");	
?>
<?php

include_once("konfigurimi.php");


$result = mysqli_query($conn,
"SELECT * FROM umvlo_kontakti ORDER BY ID_Kontakti DESC");
?>


<<!DOCTYPE HTML>
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
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>MENAXHIMI TE DHENAVE TE KONTAKTIT</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Subjektin ose Email-in" value="%"/>
</td>
<td> <input type="submit" value="Kërko" /></td>
</tr>
</table> 
</div>

</form> 
	<div class="table-wrapper">
<table width='80%' border=0>
	<div class="table-wrapper">
	<tr bgcolor='#CCCCCC'>
		<td>Emri</td>
		<td>Emaili</td>
		<td>Subjekti</td>
		<td>Mesazhi</td>
		<td>Fshijë</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM umvlo_kontakti 
WHERE Emri LIKE '%".$term."%' 
OR  Emaili LIKE '%".$term."%'"); 
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['Emri']."</td>";
		echo "<td>".$row['Emaili']."</td>";
		echo "<td>".$row['Subjekti']."</td>";
		echo "<td>".$row['Mesazhi']."</td>";
		echo "<td><a href=\"fshije_kontakt.php?ID_Kontakti=$row[ID_Kontakti]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini perdoruesin?')\" class='button' 
		>Fshijë</a>
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