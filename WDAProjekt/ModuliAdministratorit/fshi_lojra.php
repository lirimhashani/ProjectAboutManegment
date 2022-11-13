<?php

include("konfigurimi.php");


$ID_Video = $_GET['ID_Video'];


$result = mysqli_query($conn,"CALL fshi_videolojra($ID_Video)");


header("Location:Videolojrat.php");
?>
