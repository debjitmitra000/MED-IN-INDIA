<?php
// session_start();
include('../../datalayer/server.php');

// Ensure user is logged in
if (!isset($_SESSION['UserID'])) {
    header('location: login.php');
    exit;
}

// Fetch user details from the database
$UserID = $_SESSION['UserID'];
$query = "SELECT * FROM patients WHERE UserID = '$UserID'";
$result = mysqli_query($mysqli, $query);

// Check if user exists
if (mysqli_num_rows($result) == 1) {
    $col = mysqli_fetch_assoc($result); // Fetch user details
} else {
    // Handle case where user is not found
    echo "User not found!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<header class="header" style="width:100%;">
<a href="#" class="logo" style="margin-left: 50px;"><img src="image/Logo.png" alt="" height="50px"></i></a>
    <nav class="navbar">
        <a href=" index.php">MyInfo</a>
        <a href=" book.php">Book Appointment</a>
        <a href=" view.php">View Appointment</a>
        <a href="cancel.php">Cancel Booking</a>
        <a href=" searchdoctor.php">Search Doctor</a>
        <a href="donate.php">Donate Organ</a>
        <a href="searchdonor.php">Search Donar</a>
        <a href="../../call/appointment_room.html">Meeting</a>
        <a href="../../applicationlayer/Doctorpatient.php">Logout</a>
	</nav>
</header>
<h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 80px;">My <span style="text-transform: uppercase;color: var(--green);">Information</span></h1>

    <form method="post" action="index.php"  class="infoP" style="width:500px;height:300px;position:absolute;left:12%;top: 290px;background-color: var(--green);border: var(--border);">
        <div class="contentP" style="font-weight: bold;">
            <br><br>
            <label style="padding-left:35px;">ID: <?php echo $col['UserID']; ?></label><br><br>
            <label style="padding-left:35px;">Email : <?php echo $col['Email']; ?></label><br><br>
            <label style="padding-left:35px;">Name : <?php echo $col['Name']; ?></label><br><br>
            <label style="padding-left:35px;">Address : <?php echo $col['Address']; ?></label><br><br>
            <label style="padding-left:35px;">Contact Number : <?php echo $col['ContactNumber']; ?></label><br><br>
            <label style="padding-left:35px;">Blood Type : <?php echo $col['Bloodtype']; ?></label><br><br>
        </div>
    </form>
