<?php

	include("kontrolla.php");	
?>
<?php
include_once("konfigurimi.php");


if(isset($_POST['perditso_lojra']))
{	
	$ID_Video = $_POST['ID_Video'];
	$Emri = $_POST['Emri'];
	$Pershkrimi = $_POST['Pershkrimi'];
	$images = addslashes (file_get_contents($_FILES['image']['tmp_name']));
	$ID_platforma = $_POST['ID_platforma'];
	

	if(empty($Emri) || empty($Pershkrimi) ||  empty($ID_platforma)) {	
			
		if(empty($Emri)) {
			echo "<p style='color: red'>Emri hapsira eshte e zbrazet</p><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<p style='color: red'>Pershkrimi hapsira eshte e zbrazet</p><br/>";
		}
		
		if(empty($ID_Platforma)) {
			echo "<p style='color: red'>Platforma hapsira eshte e zbrazet</p><br/>";
		}
		
	} else {	
		//updating the table
		mysqli_query($conn,"SET @id = ${ID_Video}");
		mysqli_query($conn,"SET @em = '${Emri}'");
		mysqli_query($conn,"SET @prsh = '${Pershkrimi}'");
		mysqli_query($conn,"SET @foto= '${images}'");
		mysqli_query($conn,"SET @idp= ${ID_platforma}");
		$result = mysqli_query($conn,"CALL perditso_videolojrat(@id,@em,@prsh,@foto,@idp)");
		if($result)
		{	
		
			header("Location: ballina_admin.php");
		}else
		{
			die("Procedura perditso nuk mund te ekzekutohet!");
		}
		
	}
}
?>
<?php

$ID_Video = $_GET['ID_Video'];

$result = mysqli_query($conn,"SELECT * FROM umvlo_videolojrat WHERE ID_Video=$ID_Video");

while($res = mysqli_fetch_array($result))
{
	$Emri = $res['Emri'];
	$Pershkrimi = $res['Pershkrimi'];
	$image = $res['image'];
	$ID_platforma = $res['ID_platforma'];
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
                   
				   <div id="main">

		<!-- Main -->
			<section id="intro" class="main">
								<div class="spotlight">
											<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
                                   </div>

                                    <div class="table-wrapper">
						
						<form method="post"  enctype="multipart/form-data"   action="">
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
												<td><input type="hidden" name="ID_Video" value='<?php echo $_GET['ID_Video'];?>' /></td>
													<li><input type="submit" name="perditso_lojra" value="Perditeso" class="primary" /></li>
												
												</ul>
											</div>
								</div>
								</div>
							</form>
						
						</div>
				
			</section>
			
				
</body>
</html>
