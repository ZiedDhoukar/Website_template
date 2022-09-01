<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h1>INSERT UR PROGRAM</h1>
   </body>

<div>
		<form method="POST" action="add.php">
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
  <input type="submit" name="submit" value="Add">
  </form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Session</th>
				<th>Jour</th>
        <th>Heure</th>
				<th></th>
			</thead>
			<tbody>
				<?php
        
					$qry=mysqli_query($db,"select * from program");
					while($row=mysqli_fetch_array($qry)){
						?>
						<tr>
							<td><?php echo $row['prg']; ?></td>
							<td><?php echo $row['Jour']; ?></td>
              <td><?php echo $row['Heure']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
  <h2><a href = "index.php">Sign Out</a></h2>

</html>