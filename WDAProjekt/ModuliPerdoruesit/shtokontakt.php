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

if(isset($_POST['shtokontakt'])) {	
	$Emri = $_POST['Emri'];
	$Emaili = $_POST['Emaili'];
	$Subjekti = $_POST['Subjekti'];
	$Mesazhi = $_POST['Mesazhi'];
			

	if(empty($Emri) || empty($Emaili) || empty($Subjekti)|| empty($Mesazhi)) {			
		if(empty($Emri)) {echo "<font color='red'>Emri hapsira eshte e zbrazet</font><br/>";}
		if(empty($Emaili)) {echo "<font color='red'>Emaili hapsira eshte e zbrazet</font><br/>";}
		if(empty($Subjekti)) {echo "<font color='red'>Subjekti hapsira eshte e zbrazet</font><br/>";}
		if(empty($Mesazhi)) {echo "<font color='red'>Mesazhi hapsira eshte e zbrazet</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
	} else { 
	if (!filter_var($Emaili, FILTER_VALIDATE_EMAIL)==true) {
		echo("Email-i e vendosur eshte jo valide!");
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";

	}
	
		$result = mysqli_query($conn, "Call shto_kontakt('$Emri','$Emaili','$Subjekti','$Mesazhi')");
		mysqli_next_result($conn);
		
	//	echo "<font color='green'>E dhena eshte shtuar me sukses.";
		//echo "<br/><a href='contact.php'>Shiko Rezultatin</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
