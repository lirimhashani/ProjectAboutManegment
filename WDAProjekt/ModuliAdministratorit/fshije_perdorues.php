<?php
	include("kontrolla.php");	
?>
<?php

include_once("konfigurimi.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn,
"SELECT * FROM umvlo_perdoruesi ORDER BY pid DESC");
?>

<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

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
				<!-- Nav -->
				<nav id="nav">
					<?php include_once("meny.php"); ?>
                  </nav>
				<!-- Main -->
					<div id="main">
					
					
					
					
					<section id="intro" class="main">


								<!-- Form -->
								<div class="spotlight">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
				
					</div>
						

	<div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>Kërko të dhënat e përdoruesit për fshirje</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Përdoruesin ose Email-in" value="%"/>
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
		<td>Përdoruesi</td>
		<td>Fjalëkalimi</td>
		<td>Email</td>
		<td>Fshijë</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM umvlo_perdoruesi 
WHERE perdoruesi LIKE '%".$term."%' 
OR  email LIKE '%".$term."%'"); 
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['perdoruesi']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['email']."</td>";	
		echo "<td><a href=\"fshije.php?pid=$row[pid]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini perdoruesin?')\" class='button'>Fshijë</a>
		</td></tr>";		
	}

}

?>
</div>
	</table>
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