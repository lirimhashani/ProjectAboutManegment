<?php

	include("konfigurimi.php");	
?>
<?php

include_once("kontrolla.php");


$result = mysqli_query($conn,
"SELECT * FROM umvlo_platforma ORDER BY ID_platforma  DESC");
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
									<form method="post" action="shto_platformen.php">
										<div class="table-wrapper">
											<div class="col-6 col-12-small">
												<input type="text" name="Emri_p" id="Emri_p" value="" placeholder="Emri i Platformes" />
											
											<br>
											<input type="text" name="Cmimi_Plat" id="Cmimi_Plat" value="$" placeholder="Cmimi"/>
											<br>
											<br>
												<input type="text" name="Lloji" id="Lloji" value="" placeholder="Lloji i Lojes" />
											<br>
											<div class="col-6 col-12-xsmall">
												<ul class="actions">
													<li><input type="submit" name="shto_platformen" value="Shto"  /></li>
												
												</ul>
											</div>
										</div>
										
									</form>
									</div>
							

<div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>Kërko Platformen për modifikim ose per fshirje</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Emri ose Lloji i platformes" value="%"/>
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
		<td>Emri i Platformes</td>
		<td>Cmimi </td>
		<td>Lloji i Platformes</td>
		<td>Modifiko</td>
		<td>Fshije</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM umvlo_platforma 
WHERE Emri_p LIKE '%".$term."%' 
OR  Lloji LIKE '%".$term."%'");
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['Emri_p']."</td>";
		echo "<td>".$row['Cmimi_Plat']."</td>";
		echo "<td>".$row['Lloji']."</td>";	
		echo "<td><a href=\"perditso_platformen.php?ID_platforma=$row[ID_platforma]\" class='button' >Modifiko</a></td>";
		
		echo "<td><a href=\"fshije_platformen.php?ID_platforma=$row[ID_platforma]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini Platformen?')\" class='button'>Fshijë</a>
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