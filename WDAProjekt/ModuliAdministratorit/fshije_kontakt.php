<?php

include("konfigurimi.php");


$ID_Kontakti = $_GET['ID_Kontakti'];


$result = mysqli_query($conn,"CALL fshi_kontakt ($ID_Kontakti)");


header("Location:kontakti.php");
?>

