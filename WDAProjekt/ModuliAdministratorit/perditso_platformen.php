<?php

	include("kontrolla.php");	
?>
<?php

include_once("konfigurimi.php");

if(isset($_POST['perditso_platformen']))
{	
	$ID_platforma = $_POST['ID_platforma'];
	
	$Emri_p = $_POST['Emri_p'];
	$Cmimi_Plat = $_POST['Cmimi_Plat'];
	$Lloji = $_POST['Lloji'];

	if(empty($Emri_p)||empty($Cmimi_Plat)||empty($Lloji)) {	
			
		if(empty($Emri_p)) {
			echo "<font color='red'>Emri  fusha eshte e zbrazet</font><br/>";
		}	if(empty($Cmimi_Plat)) {
			echo "<font color='red'>Cmimi fusha eshte e zbrazet</font><br/>";
		}		if(empty($Lloji)) {
			echo "<font color='red'>Lloji fusha eshte e zbrazet</font><br/>";
		}			
	} else {	
		mysqli_query($conn,"SET @p_ID_platforma = ${ID_platforma}");
		mysqli_query($conn,"SET @p_Emri_p = '${Emri_p}'");
		mysqli_query($conn,"SET @p_Cmimi_Plat = '${Cmimi_Plat}'");
		mysqli_query($conn,"SET @p_Lloji = '${Lloji}'");
		$result = mysqli_query($conn,"CALL perditso_platform(@p_ID_platforma,@p_Emri_p,@p_Cmimi_Plat,@p_Lloji)") or trigger_error("Query Failed! SQL: - Error: ".mysqli_error($conn), E_USER_ERROR);
		mysqli_next_result($conn);

		
		header("Location: Platforma.php");
	}
}
?>
<?php

$ID_platforma = $_GET['ID_platforma'];


$result = mysqli_query($conn,"SELECT * FROM umvlo_platforma WHERE ID_platforma=$ID_platforma");

while($res = mysqli_fetch_array($result))
{
	$Emri_p = $res['Emri_p'];
	$Cmimi_Plat = $res['Cmimi_Plat'];
	$Lloji = $res['Lloji'];
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
		
						<!-- First Section -->
							<section id="first" class="main special">
                                <p style="text-align:left;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
								<header class="major">
									
								</header>
										<form name="form1" method="post" action="">
	
	                                        <h3>Modifiko Prodhues</h3>

			
                                                Prodhuesi
                                                <input type="text" name="Emri_p" value='<?php echo $Emri_p;?>' />
                                                <br>
												 <input type="text" name="Cmimi_Plat" value='<?php echo $Cmimi_Plat;?>' />
												 <br>
												  <input type="text" name="Lloji" value='<?php echo $Lloji;?>' />
												  <br>
                                                <input type="hidden" name="ID_platforma" value='<?php echo $_GET['ID_platforma'];?>' />
												
                                                <input type="submit" name="perditso_platformen" value="Modifiko">
                                            </form>
										
								    </table>
                            
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