<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<header class="header" style="width:100%;">
<a href="#" class="logo" style="margin-left: 50px;"><img src="image/Logo.png" alt="" height="50px"></i></a>
    <nav class="navbar">
	<a href="index2.php">MyInfo</a>
			<a href="doctorapp.php">My Appointments</a>
			<a href=" searchpatient.php">Send Report</a>
			<a href=" searchpatient2.php">Send Code</a>
			<a href="../../call/appointment_room.html">Meeting</a>
			<a href="../../applicationlayer/Doctorpatient.php">Logout</a>
	</nav>
</header>
<h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 100px;">My <span style="text-transform: uppercase;color: var(--green);">Appointments</span></h1>

	<table class="table2" style="border-collapse: collapse;width: 100%;color: #282828;font-family: monospace;font-size: 20px;text-align: center;margin-top: 50px;">
		<tr style="border:1px solid #16a085;">
		<th style="background-color: #16a085;color: white;">Appointment ID</th>
		<th style="background-color: #16a085;color: white;">DATE</th>
		<th style="background-color: #16a085;color: white;">TIME</th>
		<th style="background-color: #16a085;color: white;">PatientID</th>
		<th style="background-color: #16a085;color: white;">PatientName</th>
		<th style="background-color: #16a085;color: white;">PatientAddress</th>
		<th style="background-color: #16a085;color: white;">PatientEmail</th>
		<th style="background-color: #16a085;color: white;">PatientContactNumber</th>
		<th style="background-color: #16a085;color: white;">BloodGroup</th>

		

		</tr>
		<?php $sqldoc="SELECT  * FROM bookapp , patients   WHERE docID=('$doctorprofile') AND  patientID=UserID "  ;
		$resultdoc=$mysqli->query($sqldoc);
		if(mysqli_num_rows($resultdoc)>= 1){
			while ($rowdoc=$resultdoc->fetch_assoc()) {

				echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td><td>".$rowdoc["Bloodtype"]."</td></tr>";
			}


			echo "</table>";
	


		}

		?>
		
	</table>





</body>
</html>

