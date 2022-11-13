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

if(isset($_POST['shto'])) {	
	$perdoruesi = mysqli_real_escape_string($conn,$_POST['perdoruesi']);
	$password = mysqli_real_escape_string($conn,MD5($_POST['password']));
	$email = $_POST['email'];
		

	if(empty($perdoruesi) || empty($password) || empty($email)) {			
		if(empty($perdoruesi)) {echo "<font color='red'>perdoruesi field is empty.</font><br/>";}
		if(empty($password)) {echo "<font color='red'>password field is empty.</font><br/>";}
		if(empty($email)) {echo "<font color='red'>Email field is empty.</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
	
		$result = mysqli_query($conn, " CALL shto_perdorues('$perdoruesi','$password','$email')");
		mysqli_next_result($conn);
	echo "<script>
         setTimeout(function(){
            window.location.href = 'perdoruesit.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>E dhena eshte shtuar me sukses.";
		//echo "<br/><a href='perdoruesit.php'>Shiko rezultatin</a>";
	}
}
?>

</body>
</html>
