<html>
<head>
	<title>Shto Videolojra</title>
</head>

<body>
<?php

include_once("konfigurimi.php");

if(isset($_POST['shto_lojra'])) {	
	$Emri = $_POST['Emri'];
	$Pershkrimi = $_POST['Pershkrimi'];
	$images = addslashes (file_get_contents($_FILES['image']['tmp_name']));
	$ID_platforma = $_POST['ID_platforma'];
	
	if(empty($Emri) || empty($Pershkrimi) || empty($images)) {
				
		if(empty($Emri)) {
			echo "<p style='color: red'>Emri hapsira eshte e zbrazet</p><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<p style='color: red'>Pershkrimi hapsira eshte e zbrazet</p><br/>";
		}
		
		if(empty($images)) {
			echo "<p style='color: red'>Foto hapsira eshte e zbrazet</p><br/>";
		}
		
		
		
		echo "<br/><a href='javascript:self.history.back();'>Shko Mbrapa</a>";
	} else {
		$result = mysqli_query($conn,
            "CALL shto_videolojra('$Emri','$Pershkrimi','$images',$ID_platforma)");
		mysqli_next_result($conn);
		echo "<p style='color: green'>E dhena eshte shtuar me sukses</p>";
		echo "<br/><a href='Videolojrat.php'>Shiko Rezultatin</a>";
	}
}
?>
</body>
</html>
