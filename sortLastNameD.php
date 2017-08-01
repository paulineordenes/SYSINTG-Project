<?php
	session_start();
	
	require_once('/mysql_connect.php');
?>

<html>
	<head>
		<link href='index.css' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:300,200italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<?php
			/**
			*
			* EDIT THIS PART!!!!!!!!!!!!!
			*
			**/
		?>	
		
		<div align="center" style="background-color: #fff; border: solid 2px #000; font-family: 'Oswald', Segoe UI, Arial'; width: 300px;">
			<p><a href="sortAgeUniv.php"><input type="button" value="Group By Age and University"></p>
			<p><a href="sortLastName.php"><input type="button" value="Sort by Last Name"></p>
			<p>&nbsp;</p>
			<p><a href="logout.php"><input type="button" value="Log Out"></a></p>
		</div>
		
		<div class="total">
			<h1>Total Students: <?php $query="SELECT COUNT(*) as count FROM students.data"; 
									$result=mysqli_query($dbc,$query); 
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									echo $row['count'];
								?>
			<h1>
		
			<table align="center">
				<tr>
					<th>University</th>
					<th>Student Count</th>
					<th>University</th>
					<th>Student Count</th>
				</tr>
				
				<tr>
					<td><img src="logos/admu.png"></td>
					<td><p><?php $query="SELECT COUNT(*) as count FROM students.data WHERE university='Ateneo De Manila University';"; 
									$result=mysqli_query($dbc,$query); 
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									echo $row['count'];
							?></p></td>
					<td><img src="logos/dlsu.png"></td>
					<td><p><?php $query="SELECT COUNT(*) as count FROM students.data WHERE university='De La Salle University';"; 
									$result=mysqli_query($dbc,$query); 
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									echo $row['count'];
							?></p></td>
				</tr>
				
				<tr>
					<td><img src="logos/lpu.png"></td>
					<td><p><?php $query="SELECT COUNT(*) as count FROM students.data WHERE university='Lyceum of the Philippines University';"; 
									$result=mysqli_query($dbc,$query); 
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									echo $row['count'];
							?></p></td>
					<td><img src="logos/mapua.png"></td>
					<td><p><?php $query="SELECT COUNT(*) as count FROM students.data WHERE university='Mapua Institute of Technology';"; 
									$result=mysqli_query($dbc,$query); 
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									echo $row['count'];
							?></p></td>
				</tr>
				
				<tr>
					<td><img src="logos/sti.jpg"></td>
					<td><p><?php $query="SELECT COUNT(*) as count FROM students.data WHERE university='Systems Technology Institute';"; 
									$result=mysqli_query($dbc,$query); 
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									echo $row['count'];
							?></p></td>
					<td><img src="logos/ust.png"></td>
					<td><p><?php $query="SELECT COUNT(*) as count FROM students.data WHERE university='University of Santo Tomas';"; 
									$result=mysqli_query($dbc,$query); 
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									echo $row['count'];
							?></p></td>
				</tr>
				
				<tr>
					<td><img src="logos/up.png"></td>
					<td><p><?php $query="SELECT COUNT(*) as count FROM students.data WHERE university='University of the Philippines';"; 
									$result=mysqli_query($dbc,$query); 
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									echo $row['count'];
							?></p></td>
				</tr>
			</table>
		</div>
		
		<div class="list">
			<p><a href="sortLastName.php"><input type="button" value="Order: A->Z"></a></p>
			<h1>List of students</h1>
			<table align="center">
				<tr>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Date of Birth</th>
					<th>University</th>
				</tr>
				
				<?php
					require_once('mysql_connect.php');
					$query="select data.lastname, data.name, data.birthday, data.university from students.data ORDER BY lastname DESC;";
					$result=mysqli_query($dbc,$query);
				
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						$lastname=$row['lastname'];
						$firstname=$row['name'];
						$dob=$row['birthday'];
						$university=$row['university'];
						
						echo "<tr>";
							echo "<td>"; 
								echo $lastname;
							echo "</td>";
						
							echo "<td>";
								echo $firstname;
							echo "</td>";
							
							echo "<td>"; 
								echo $dob;
							echo "</td>";
							
							echo "<td>"; 
								echo $university;
							echo "</td>";
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>