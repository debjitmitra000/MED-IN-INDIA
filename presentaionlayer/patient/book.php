<?php
// session_start();
include '../../datalayer/bookserver.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient</title>
    <link rel="stylesheet" href="style2.css">
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
<body>
    <h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 80px;">Book <span style="text-transform: uppercase;color: var(--green);">Appointment</span></h1>
    <form method="post" action="book.php" style="position:absolute;right:250px;">
        <?php include ('../../datalayer/errors.php');?>

        <div class="input-group" style="margin-bottom: 5px;width: 100%;">
            <label style="display: inline-block;text-align: left;font-size: 1.6rem;">Category</label>
            <select name="categorey" class="xd" style="height: 50px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
                <option value="bone">Bone</option>
                <option value="heart">Heart</option>
                <option value="Dentistry">Dentistry</option>
                <option value="MentalHealth">Mental Health</option>
                <option value="Surgery">Surgery</option>
            </select>
        </div>

        <div class="input-group" style="margin-bottom: 5px;width: 100%;">
            <button type="submit" name="Search" class="btn" style="margin: 0 auto;display: block;width:100px;height:30px;font-size: 1.6rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;">Search</button>
        </div>

        <?php  
        if (isset($_POST['Search'])) {
            $categorey = mysqli_real_escape_string($mysqli, $_POST['categorey']);
            $query2 = "SELECT * FROM doctor WHERE categorey=('$categorey')";
            $result2 = mysqli_query($mysqli, $query2);
        ?>
        <div class="input-group" style="margin-bottom: 5px;width: 100%;"> 
            <label style="display: inline-block;text-align: left;font-size: 1.6rem;">Doctor ID</label>
            <select class="input-group2" name="docID" style="height: 50px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
                <?php while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                    <option> <?php echo $row2['DoctorID'] ?> </option>
                <?php } ?>
            </select>
        </div>

        

        <div class="input-group">
            <label style="display: inline-block;text-align: left;font-size: 1.6rem;">Date</label>
            <input type="Date" name="Date" style="height: 50px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
        </div>

        <div class="input-group">
            <label style="display: inline-block;text-align: left;font-size: 1.6rem;">Time</label>
            <input type="Time" name="Time" style="height: 50px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
        </div>

        <div class="input-group">
            <button type="submit" name="Book" class="btn" style="margin: 5px auto;display: block;width:100px;height:30px;font-size: 1.6rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;">BOOK</button>
        </div>
        <?php } ?>
    </form>
    <img src="image/Book.gif" alt="" style="position:absolute; left:250px;top:180px;">
</body>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/3d4cf0b1-b1d8-43db-816d-95e960425658/webchat/config.js" defer></script>
</html>
