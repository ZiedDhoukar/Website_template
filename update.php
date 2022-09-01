<?php
	include('Config.php');
	$id=$_GET['id'];
 
	$prg=$_POST['prg'];
	$Jour=$_POST['Jour'];
    $Heure=$_POST['Heure'];

	mysqli_query($conn,"update program set prg='$prg', Jour='$Jour', Heure='$Heure' where id='$id'");
	header('location:welcome.php');
?>