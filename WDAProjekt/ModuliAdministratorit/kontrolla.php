<?php

include('konfigurimi.php');
session_start();
$user_check=$_SESSION['perdoruesi'];
$ses_sql = mysqli_query($conn,"SELECT perdoruesi FROM umvlo_perdoruesi WHERE perdoruesi='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['perdoruesi'];
if(!isset($user_check))
{ header("Location: index.php");} 
?>