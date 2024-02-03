<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style-css.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header class="header" style="width:100%;">
	<a href="#" class="logo" style="margin-left: 50px;"><img src="image/Logo.png" alt="" height="50px"></i></a>
	<nav class="navbar">
		<a href="index3.php">Add/Delete Doctor</a>
		<a href="viewdoctor.php">View Doctors</a>
		<a href=" viewpatients.php">View Patients</a>
		<a href="viewappointments.php">View Appointments</a>
		<a href="searchdonoradmin.php">Search Donor</a>
		<a href="../../applicationlayer/Doctorpatient.php">Logout</a>
	</nav>
</header>
<body>
<h1 class="heading2">View <span>Doctors</span></h1>
	<table class="table4">
		<tr>
		<th>Doctor ID</th>
		<th>Doctor Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Password</th>
		<th>Category</th>

		</tr>

		<?php $sql3="SELECT  * FROM  doctor " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["DoctorID"]."</td><td>".$row3["Doctorname"]."</td><td>".$row3["email"]."</td><td>".$row3["Address"]."</td><td>".$row3['ContactNumber']."</td><td>".$row3['password']."</td><td>".$row3["categorey"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>