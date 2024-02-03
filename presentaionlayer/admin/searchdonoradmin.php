<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style-css.css" type="text/css">

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
<h1 class="heading2">Search <span>Donor</span></h1>
	<form method="post" action="searchdonoradmin.php" class="searchdonor">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold;font-size:20px;text-align:center;">Search By<br>Blood Group/Organ  </label>
		<input type="text" name="dID3" style="border: 1px solid #16a085;border-radius: 10px 10px 10px 10px; padding-top:10px;padding-bottom:10px; text-align:center;font-size:15px">

	</div>

	<div class="input-group">
		<button type="submit" name="SearchD" class="btnA" style="padding: 5px;margin-left: 160px;margin-top: 20px; padding-left: 15px; padding-right: 15px">Search</button>
	</div>

	







		</form>
	</form>


	

		<?php 

         if (isset($_POST['SearchD'])) {

         ?>	<table class="table4">
		<tr>
		<th>Donor ID</th>
		<th>Donor Name</th>
		<th>Donor Address</th>
		<th>Donor Contact Number</th>
		<th>Donor Email</th>
		<th>Donor BloodGroup</th>
		<th>Donor Organ</th>



		</tr> <?php  


		$dID3 =$mysqli -> real_escape_string($_POST['dID3']);

		$sql8="SELECT  * FROM  donor   WHERE donarblood=('$dID3') OR organ=('$dID3') ";
		$result8=$mysqli->query($sql8);
		if(mysqli_num_rows($result8)>=1){
			while ($row8=$result8->fetch_assoc()) {

				echo "<tr><td>".$row8["donarID"]."</td><td>".$row8["donarname"]."</td><td>".$row8["donaraddress"]."</td><td>".$row8["donarnumber"]."</td><td>".$row8['donaremail']."</td><td>".$row8['donarblood']."</td><td>".$row8['organ']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
				
	


</body>
</html>

