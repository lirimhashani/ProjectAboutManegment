<html>
	<head>
		<title>UMVLO-Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

<?php

include_once("konfigurimi.php");

if(isset($_POST['shto_tdhena'])) {	
	$Titulli = mysqli_real_escape_string($conn,$_POST['Titulli']);
	$Pershrkimi = mysqli_real_escape_string($conn,$_POST['Pershrkimi']);
	$Dosja = mysqli_real_escape_string($conn,($_POST['Dosja']));
	$PamjaFaqes = mysqli_real_escape_string($conn,($_POST['PamjaFaqes']));
		

	if(empty($Titulli) || empty($Pershrkimi) || empty($Dosja)|| empty($PamjaFaqes)) {			
		if(empty($Titulli)) {echo "<font color='red'>Titulli hapsira eshte e zbrazet.</font><br/>";}
		if(empty($Pershrkimi)) {echo "<font color='red'>Pershrkimi hapsira eshte e zbrazet.</font><br/>";}
		if(empty($Dosja)) {echo "<font color='red'>Dosja hapsira eshte e zbrazet</font><br/>";}
		if(empty($PamjaFaqes)) {echo "<font color='red'>PamjaFaqes hapsira eshte e zbrazet.</font><br/>";}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
	
		$result = mysqli_query($conn, " CALL shto_tdhena('$Titulli','$Pershrkimi','$Dosja','$PamjaFaqes')");
		mysqli_next_result($conn);
	echo "<script>
         setTimeout(function(){
            window.location.href = 'modifiko_tedhena.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>E dhena eshte shtuar me sukses.";
		//echo "<br/><a href='modifiko_tedhena.php'>Shiko rezultatin</a>";
	}
}
?>

</body>
</html>
