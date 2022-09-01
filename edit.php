<?php
	include('Config.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from program where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
  <select name="prg" id="prg">
    <option value="Yoga">Yoga</option>
    <option value="streach">Streach</option>
    <option value="Massage">Massage</option>
    <option value="Workout">Workout</option>
  </select>
  <select name="Jour" id="Jour">
    <option value="Lundi">Lundi</option>
    <option value="Mardi">Mardi</option>
    <option value="Mercredi">Mercredi</option>
    <option value="Jeudi">Jeudi</option>
    <option value="Vendredi">Vendredi</option>
    <option value="Samdi">Samdi</option>
    <option value="Dimanche">Dimanche</option>
  </select>
  <select name="Heure" id="Heure">
    <option value="8a10">8h à 10h</option>
    <option value="10a12">10h à 12h</option>
    <option value="14a16">14h à 16h</option>
    <option value="16a18">16h à 18h</option>
    <option value="18a20">18h à 20h</option>
  </select> 
  <input type="submit" name="submit">
		<a href="welcome.php">Back</a>
	</form>
</body>
</html>