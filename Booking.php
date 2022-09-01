<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h1>SELECT UR SESSION</h1>
   </body>

<div>

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
								<a href="">Book</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
  <h2><a href = "index.php">Home</a></h2>

</html>