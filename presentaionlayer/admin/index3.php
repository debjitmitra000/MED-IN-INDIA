<?php include('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin</title>
	<link rel="stylesheet" href="style-css.css" type="text/css">

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

	<h1 class="heading">Add <span>Doctor</span></h1>
	<form method="post" action="index3.php" style="position:absolute;Left:200px;top:190px;">

		<?php include('../../datalayer/errors.php'); ?>

		


		<div class="input-groupA">
			<label>Doctor Name</label>
			<input type="text" name="addname">


		</div>

		<div class="input-groupA">
			<label>Address</label>
			<input type="text" name="addAddress">

		</div>

		<div class="input-groupA">
			<label>Contact Number</label>
			<input type="text" name="addContactNumber">


		</div>


		<div class="input-groupA">
			<label>Email address</label>
			<input type="text" name="addEmail">

		</div>

		<div class="input-groupA">
			<label>Password</label>
			<input type="text" name="addpassword">

		</div>
		<div class="input-groupA">
			<label>Category</label>
			<select name="addcategory" class="xd">
				<option value="bone">Bones</option>
				<option value="heart">Heart</option>
				<option value="Dentistry">Dentistry</option>
				<option value="MentalHealth">Mental Health</option>
				<option value="Surgery">Surgery</option>
			</select>
		</div>

		<div class="input-groupA">
			<button type="submit" name="Add" class="btnA">Add Doctor</button>
		</div>

	</form>
        
	<h1 class="heading1">Delete <span>Doctor</span></h1>

	<form method="post" action="index3.php" class="delete" style="position:absolute;right:200px; top:190px;">

		<div class="input-groupA">
			<label>Doctor ID</label>
			<input type="text" name="deleteID">

		</div>

		<div class="input-groupA">
			<button type="submit" name="Delete" class="btnA">Delete</button>
		</div>

	</form>
	<img src="image/Doc-Patient.gif" alt="" style="width:300px;position absolute; position: absolute;top: 350px;right: 290px;">
</body>

</html>