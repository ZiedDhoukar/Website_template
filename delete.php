<?php
	$id=$_GET['id'];
	include('Config.php');
	mysqli_query($db,"delete from program where id='$id'");
	header('location:welcome.php');
?>