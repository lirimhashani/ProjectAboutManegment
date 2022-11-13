<?php

include("konfigurimi.php");


$pid = $_GET['pid'];


$result = mysqli_query($conn,"CALL fshi_perdorues ($pid)");


header("Location:perdoruesit.php");
?>

