<?php
// session_start();
include('../../datalayer/server.php');

// Ensure user is logged in
if (!isset($_SESSION['DoctorID'])) {
    header('location: login.php'); // Redirect to login page if not logged in
    exit;
}

// Fetch doctor details from the database
$DoctorID = $_SESSION['DoctorID'];
$queryD = "SELECT * FROM doctor WHERE DoctorID = '$DoctorID'";
$resultD = mysqli_query($mysqli, $queryD);

// Check if doctor exists
if (mysqli_num_rows($resultD) == 1) {
    $colD = mysqli_fetch_assoc($resultD); // Fetch doctor details
} else {
    // Handle case where doctor is not found
    echo "Doctor not found!";
}
?>
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
<h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 100px;">My <span style="text-transform: uppercase;color: var(--green);">Information</span></h1>
<header>

<form method="post" action="index2.php" class="info" style="width:500px;height:300px;position:absolute;left:12%;top: 290px;background-color: var(--green);border: var(--border);">
    <div class="Dcontent" style="font-weight: bold;">
		<br><br>
        <label style="padding-left:35px;">Email: <?php echo $colD['email']; ?></label><br><br>
        <label style="padding-left:35px;">ID: <?php echo $colD['DoctorID']; ?></label><br><br>
        <label style="padding-left:35px;">Name: <?php echo $colD['Doctorname']; ?></label><br><br>
        <label style="padding-left:35px;">Address: <?php echo $colD['Address']; ?></label><br><br>
        <label style="padding-left:35px;">Contact Number: <?php echo $colD['ContactNumber']; ?></label><br><br>
        <label style="padding-left:35px;">Specialized In: <?php echo $colD['categorey']; ?></label><br><br>
    </div>
</form>
<div class="image1" style="position:absolute;right:12%;top: 195px">
	<img src="image/Info.gif" alt=""></i></a>
</div>
</body>
</html>
<!--<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
				<?php
                         
						 unset($_SESSION['success']); 
					 ?> 
				 </h3> 
			 </div> 
		 <?php endif ?> 
 
		 $Patientsearch = mysqli_real_escape_string($mysqli,$_POST['Patientsearch']);
	 
	 $query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
	 $result2=mysqli_query($mysqli,$query);
 
	
		 <!-- information of the user logged in -->
		 <!-- welcome message for the logged in user -->