<?php

include("konfigurimi.php");


$ID_platforma = $_GET['ID_platforma'];


$result = mysqli_query($conn,"CALL fshi_platform ($ID_platforma) ");


header("Location:Platforma.php");
?>

