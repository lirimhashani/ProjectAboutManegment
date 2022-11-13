<?php

include("konfigurimi.php");


$ID_Dhenat = $_GET['ID_Dhenat'];


$result = mysqli_query($conn,"CALL fshi_tdhena ($ID_Dhenat)");


header("Location:ballina_admin.php");
?>

