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
<a href="#" class="logo" style="margin-left: 50px;"><img src="image/LOGO.png" alt="" height="50px"></i></a>
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
<h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 80px;">Donate <span style="text-transform: uppercase;color: var(--green);">Organ</span></h1>
<body>


	<form method="post" action="donate.php" style="position: absolute;top:220px;left:15%;">

	<?php include ('../../datalayer/errors.php'); ?>




	<?php  
    if (isset($_POST['Donate'])) {

	$DUserID 			= $mysqli -> real_escape_string($_POST['DUserID']);
	$DUsername 			= $mysqli -> real_escape_string($_POST['DName']);
	$DAddress 			= $mysqli -> real_escape_string($_POST['DAddress']);
	$DContactNumber		= $mysqli -> real_escape_string($_POST['DContactNumber']);
	$DEmail 			= $mysqli -> real_escape_string($_POST['DEmail']);
	$Dbloodtype 		= $mysqli -> real_escape_string($_POST['Dbloodtype']);
	$Dorgan				= $mysqli -> real_escape_string($_POST['Organ']);
	




	if (empty($DUserID)) {
	array_push($errors,"UserID is required");
	# code...
}

if (empty($DUsername)) {
	array_push($errors,"UserName is required");
	# code...
}


if (empty($DAddress)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($DContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($DEmail)) {
	array_push($errors,"Email is required");
	# code...
}


if (empty($Dbloodtype)) {
	array_push($errors,"Bloodtype is required");
	# code...
}
if (count($errors) == 0) {
    $sql7 = "INSERT INTO donor (donarID,donarname,donaraddress,donarnumber,donaremail,donarblood,organ) VALUES ('$DUserID','$DUsername','$DAddress','$DContactNumber','$DEmail','$Dbloodtype','$Dorgan') ";
    if ($mysqli->query($sql7)) { ?>
        <script>
            // Alert with the name of the donated organ
            alert('Thank you for donating <?php echo $Dorgan; ?>');
        </script>
?>

	<h2 class="thanks"> <?php printf("Thanks For Donation",$mysqli->affected_rows);?></h2>
			
			
		<?php 



	}
}
}
?>


	<div class="input-group"style="margin-bottom: 5px;width: 100%;">
		<label style="display: inline-block;text-align: left;font-size: 1.6rem;">User ID</label>
		<input style="height: 25px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;" type="text" name="DUserID" value=" <?php echo "" .$_SESSION['UserID'];?> " >

	</div>


	<div class="input-group"style="margin-bottom: 5px;width: 100%;">
		<label style="display: inline-block;text-align: left;font-size: 1.6rem;">Name</label>
		<input style="height: 25px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;" type="text" name="DName" value="<?php echo $col['Name']; ?> " >


	</div>

	<div class="input-group"style="margin-bottom: 5px;width: 100%;">
		<label style="display: inline-block;text-align: left;font-size: 1.6rem;">Address</label>
		<input style="height: 25px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;" type="text" name="DAddress" value="<?php echo $col['Address']; ?>">

	</div>

	<div class="input-group"style="margin-bottom: 5px;width: 100%;">
		<label style="display: inline-block;text-align: left;font-size: 1.6rem;">Contact Number</label>
		<input style="height: 25px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;" type="text" name="DContactNumber" value=" <?php echo $col['ContactNumber']; ?>">


	</div>


	<div class="input-group"style="margin-bottom: 5px;width: 100%;">
		<label style="display: inline-block;text-align: left;font-size: 1.6rem;">Email address</label>
		<input style="height: 25px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;" type="text" name="DEmail" value="<?php echo $col['Email']; ?>">

	</div>

	<div class="input-group"style="margin-bottom: 5px;width: 100%;">
		<label style="display: inline-block;text-align: left;font-size: 1.6rem;">Blood type</label>
		<input style="height: 25px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;" type="text" name="Dbloodtype" value="<?php echo $col['Bloodtype']; ?>">

	</div>

	<div class="input-group"style="margin-bottom: 5px;width: 100%;">
		<label style="display: inline-block;text-align: left;font-size: 1.6rem;">Type Of Organ</label>
	   	<select name="Organ" class="xd" style="height: 30px;width: calc(100% - 22px);padding: 0 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
	   		<option value="Blood">Blood</option>
	   		<option value="Heart">Heart</option>
	   		<option value="kidney">kidney</option>
	   		<option value="Eye">Eye</option>

	   	</select>

	<div class="input-group"style="margin-bottom: 5px;width: 100%;">
		<button type="submit" name="Donate" class="btn" style="margin: 5px auto;display: block;width:100px;height:30px;font-size: 1.6rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;">Donate</button>
	</div>
</div>
</form>
<img src="image/Donate.gif" alt="" style="position:absolute;top:180px;right:15%;">
</body>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/3d4cf0b1-b1d8-43db-816d-95e960425658/webchat/config.js" defer></script>
</html>
