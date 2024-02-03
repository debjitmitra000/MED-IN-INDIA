<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style3.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
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
<h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 100px;">Send <span style="text-transform: uppercase;color: var(--green);">Code</span></h1>
<header>

<body>


	
<form method="post" action="searchpatient2.php" class="patientsearch">

	<?php include ('../../datalayer/errors.php') ;?>

    <div class="input-group" style="margin-bottom: 5px;width: 100%; ">
		<label style="display: inline-block;text-align: left;position:absolute;right:740px;top:175px;font-size: 1.6rem;">Search By</label>
		<span style="display: inline-block;text-align: left;position:absolute;right:677px;top:195px;font-size: 1.6rem;">(Patient ID/Patient Name)</span>
		<input type="text" name="PID" style="height: 25px;width: 200px;padding: 10px;font-size: 1.3rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;position:absolute;right:678px;top:222px;">

	</div>
	<div class="input-group" style="margin-bottom: 5px;width: 100%; ">
		<button type="submit" name="SearchP" class="btn" style="margin: 5px auto;display: block;width:100px;height:25px;font-size: 1.3rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;position:absolute;right:730px;top:250px;">Search</button>
	</div>
    </header>
	</form>
		<?php 

			if (isset($_POST['SearchP'])) {

			?>	
			<table class="table3" style="border-collapse: collapse;width: 100%;color: #282828;font-family: monospace;font-size: 20px;text-align: center;margin-top: 95px;">
			<tr style="border:1px solid #16a085;">
			<th style="background-color: #16a085;color: white;">PatientID</th>
			<th style="background-color: #16a085;color: white;">Name</th>
			<th style="background-color: #16a085;color: white;">Address</th>
			<th style="background-color: #16a085;color: white;">Contact Number</th>
			<th style="background-color: #16a085;color: white;">Email</th>
			<th style="background-color: #16a085;color: white;">BloodGroup</th>
			</tr> <?php  
			$PID =$mysqli -> real_escape_string($_POST['PID']);

			$sqlP="SELECT  * FROM  patients   WHERE 	UserID=('$PID') OR Name=('$PID') " ;
			$resultP=$mysqli->query($sqlP);
			if(mysqli_num_rows($resultP)==1){
			while ($rowP=$resultP->fetch_assoc()) {

				echo "<tr><td>".$rowP["UserID"]."</td><td>".$rowP["Name"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNumber"]."</td><td>".$rowP['Email']."</td><td>".$rowP['Bloodtype']."</td></tr>";
			}
			echo "</table>";
		}
	}?>

<section style="position:absolute;top:450px;right:42.5%">
    <div class="main">
        <div class="mail-area">
            <form method="post" action="sendmail2.php" enctype="multipart/form-data">
                <input type="text" class="input" name="message" placeholder="Code" id="code" style="height: 15px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
				<button onclick="generateCode()" id="generatePdfBtn" style="margin: 5px auto;display: block;width:150px;height:25px;font-size: 1.3rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;">Generate Code</button>
				<input type="email" name="email" class="input" placeholder="Email Id" style="height: 15px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;" required>
                <input onclick="document.getElementById('code').value = '';" class="input btn" id="downloadPdfBtn" type="submit" name="send" value="Send" style="display:none;margin: 5px auto;width:150px;height:25px;font-size: 1.3rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;">
				<input type="hidden" id="generatedCodeInput" name="generatedCode">
            </form>
        </div>
    </div>
	<h3 style="position:absolute;top:120px;width:260px;">Lastly Generated Code : <span id="generatedCode"></span></h3>
</section>
<img src="image/b1.gif" alt="" style="width:270px;position:absolute;top:380px;left:10%;">
<img src="image/b2.gif" alt="" style="width:270px;position:absolute;top:380px;right:10%;">
<script>
	function generateCode() {
            const length = 10;
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            document.getElementById('code').value = result;
			document.getElementById('generatedCode').innerHTML = result;
    		document.getElementById('generatedCodeInput').value = result;
			localStorage.setItem('generatedCode', result);
			const downloadBtn = document.getElementById('downloadPdfBtn');
			downloadBtn.style.display = 'block'; 
	}
	window.onload = function() {
        const generatedCode = localStorage.getItem('generatedCode');
        if (generatedCode) {
            document.getElementById('generatedCode').innerHTML = generatedCode;
        }
    };
</script>

</body>
</html>


