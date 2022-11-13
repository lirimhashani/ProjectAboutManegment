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

if(isset($_POST['shto_platformen'])) {	
	$Emri_p = $_POST['Emri_p'];
	$Cmimi_Plat = $_POST['Cmimi_Plat'];
	$Lloji = $_POST['Lloji'];
	
		

	if(empty($Emri_p) || empty($Cmimi_Plat) || empty($Lloji)) {			
		if(empty($Emri_p)) {echo "<font color='red'>Emri i platformes hapsira eshte e zbrazet.</font><br/>";}
		if(empty($Cmimi_Plat)) {echo "<font color='red'>Cmimi hapsira eshte e zbrazet.</font><br/>";}
		if(empty($Lloji)) {echo "<font color='red'>Lloji i Lojes hapsira eshte i zbrazet</font><br/>";}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
	
		$result = mysqli_query($conn, " CALL shto_platform('$Emri_p','$Cmimi_Plat','$Lloji')");
		mysqli_next_result($conn);
		
	echo "<script>
         setTimeout(function(){
            window.location.href = 'Platforma.php';
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
