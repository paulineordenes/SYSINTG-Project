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
			<h1>List of students</h1>
			<table align="center">
				<tr>
					<th>University</th>
					<th>Birth Year</th>
					<th>Student Count</th>
				</tr>
				
				<?php
				//get ateneo
					require_once('mysql_connect.php');
					$query="select university, year(birthday) AS birthyear, count(*) AS studentCount FROM students.data WHERE university='Ateneo De Manila University' group by year(birthday)";
					$result=mysqli_query($dbc,$query);
				
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						$university=$row['university'];
						$birthyear=$row['birthyear'];
						$studentCount=$row['studentCount'];
						
						echo "<tr>";
							echo "<td>"; 
								echo $university;
							echo "</td>";
						
							echo "<td>";
								echo $birthyear;
							echo "</td>";
							
							echo "<td>"; 
								echo $studentCount;
							echo "</td>";
						echo "</tr>";
					}
					//get dlsu
					$query="select university, year(birthday) AS birthyear, count(*) AS studentCount FROM students.data WHERE university='De La Salle University' group by year(birthday)";
					$result=mysqli_query($dbc,$query);
				
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						$university=$row['university'];
						$birthyear=$row['birthyear'];
						$studentCount=$row['studentCount'];
						
						echo "<tr>";
							echo "<td>"; 
								echo $university;
							echo "</td>";
						
							echo "<td>";
								echo $birthyear;
							echo "</td>";
							
							echo "<td>"; 
								echo $studentCount;
							echo "</td>";
						echo "</tr>";
					}
					//get lyceum
					$query="select university, year(birthday) AS birthyear, count(*) AS studentCount FROM students.data WHERE university='Lyceum of the Philippines University' group by year(birthday)";
					$result=mysqli_query($dbc,$query);
				
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						$university=$row['university'];
						$birthyear=$row['birthyear'];
						$studentCount=$row['studentCount'];
						
						echo "<tr>";
							echo "<td>"; 
								echo $university;
							echo "</td>";
						
							echo "<td>";
								echo $birthyear;
							echo "</td>";
							
							echo "<td>"; 
								echo $studentCount;
							echo "</td>";
						echo "</tr>";
					}
					// get mapua
					$query="select university, year(birthday) AS birthyear, count(*) AS studentCount FROM students.data WHERE university='Mapua Institute of Technology' group by year(birthday)";
					$result=mysqli_query($dbc,$query);
				
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						$university=$row['university'];
						$birthyear=$row['birthyear'];
						$studentCount=$row['studentCount'];
						
						echo "<tr>";
							echo "<td>"; 
								echo $university;
							echo "</td>";
						
							echo "<td>";
								echo $birthyear;
							echo "</td>";
							
							echo "<td>"; 
								echo $studentCount;
							echo "</td>";
						echo "</tr>";
					}
					//get sti
					$query="select university, year(birthday) AS birthyear, count(*) AS studentCount FROM students.data WHERE university='Systems Technology Institute' group by year(birthday)";
					$result=mysqli_query($dbc,$query);
				
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						$university=$row['university'];
						$birthyear=$row['birthyear'];
						$studentCount=$row['studentCount'];
						
						echo "<tr>";
							echo "<td>"; 
								echo $university;
							echo "</td>";
						
							echo "<td>";
								echo $birthyear;
							echo "</td>";
							
							echo "<td>"; 
								echo $studentCount;
							echo "</td>";
						echo "</tr>";
					}
					//get ust
					
					$query="select university, year(birthday) AS birthyear, count(*) AS studentCount FROM students.data WHERE university='University of Santo Tomas' group by year(birthday)";
					$result=mysqli_query($dbc,$query);
				
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						$university=$row['university'];
						$birthyear=$row['birthyear'];
						$studentCount=$row['studentCount'];
						
						echo "<tr>";
							echo "<td>"; 
								echo $university;
							echo "</td>";
						
							echo "<td>";
								echo $birthyear;
							echo "</td>";
							
							echo "<td>"; 
								echo $studentCount;
							echo "</td>";
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>