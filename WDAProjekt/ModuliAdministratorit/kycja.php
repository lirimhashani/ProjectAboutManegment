<?php

	session_start();
	include("konfigurimi.php"); 
	
	$error = ""; 
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["perdoruesi"]) || empty($_POST["password"]))
		{
			$error = "Te dy fushat duhet te plotesohen.";
		}else
		{
		
			$perdoruesi=$_POST['perdoruesi'];
			$password=md5($_POST['password']);
			
			$sql="SELECT pid FROM umvlo_perdoruesi WHERE perdoruesi='$perdoruesi' 
			and password='$password'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['perdoruesi'] = $perdoruesi; 
				header("location: ballina_admin.php"); 
			}else
			{
				$error = "Perdoruesi ose passwordi jane gabim.";
			}
		}
	}
?>