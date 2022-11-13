<?php

	include("konfigurimi.php");	
?>
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
                    <div id="main">

		<!-- Main -->
			<section id="intro" class="main">
								<div class="spotlight">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
				</div>
					
					
														

							
								<!-- Form -->
									<h3>Shto Videolojra</h3>
									
									<div class="table-wrapper">
									<form method="post"  enctype="multipart/form-data"   action="shto_lojra.php">
										<div class="table-wrapper">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="Emri" id="Emri" value="" placeholder="Emri i Videolojes" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="Pershkrimi" id="Pershkrimi" value="" placeholder="Pershkrimi" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
												<input name="image" type="file" />
										<br><br>
											</div>
											<div class="col-6 col-12-xsmall">
											<select name="ID_platforma" id="ID_platforma" placeholder="Zgjedh Platformen">
										
															<?php
            $result = mysqli_query($conn, "CALL zgjidh_platformen()");
            while ($row = mysqli_fetch_array($result))
				
				 {
				echo "<option value='$row[ID_platforma]'>$row[Emri_p]</option>";
			}
			mysqli_next_result($conn);
            ?>
												   </select>
												
											</div>
											<div class="col-6 col-12-small">
												<ul class="actions">
													<li><input type="submit" name="shto_lojra" value="Shto" class="primary" /></li>
												
												</ul>
											</div>
										</div>
										</div>
									</form>
									<br>
							</div>		
							
							
							<div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>Kërko Lojrat për modifikim për fshirje</h3>
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
		<td>Emri</td>
		<td>Pershkrimi</td>
		<td>Dosja</td>
		<td>ID_platforma</td>
		<td>Modifiko</td>
		<td>Fshije</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM umvlo_videolojrat
WHERE Emri LIKE '%".$term."%' 
OR  ID_platforma LIKE '%".$term."%'");
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['Emri']."</td>";
		echo "<td>".$row['Pershkrimi']."</td>";
		echo "<td><img src=data:images/jpeg;base64,".base64_encode($row['image'])." width='80'  height='100'/></td>";
		echo "<td>".$row['ID_platforma']."</td>";
		echo "<td><a href=\"perditso_lojra.php?ID_Video=$row[ID_Video]\" class='button' >Modifiko</a></td>";
		echo "<td><a href=\"fshi_lojra.php?ID_Video=$row[ID_Video]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini Lojen?')\" class='button'>Fshijë</a>
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