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
<h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 100px;">Send <span style="text-transform: uppercase;color: var(--green);">Report</span></h1>
<header>

<body>


	
<form method="post" action="searchpatient.php" class="patientsearch">

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


<section style="position:absolute;top:370px;left:5%">
<div class="input-group" style="margin-bottom: 3px;width: 100%;">
    <input type="text" id="myText1" placeholder="Dr Name" style="height: 15px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
</div>    
<div class="input-group"style="margin-bottom: 3px;width: 100%;">
    <input type="text" id="myText2" placeholder="Degree" style="height: 15px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
</div>
<div class="input-group"style="margin-bottom: 3px;width: 100%;">
    <input type="text" id="myText3" placeholder="Patient's Name"style="height: 15px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
</div>  
<div class="input-group"style="margin-bottom: 3px;width: 100%;">
    <input type="text" id="myText4" placeholder="Age"style="height: 15px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
</div>
<div class="input-group"style="margin-bottom: 3px;width: 100%;">  
    <textarea id="myTextarea1" rows="9" cols="20" placeholder="Tests To Do"style="height: 75px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;"></textarea>
</div>
<div class="input-group"style="margin-bottom: 3px;width: 100%;">
    <textarea id="myTextarea2" rows="9" cols="20" placeholder="Medicine"style="height: 75px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;"></textarea>
</div>   
    <button id="generatePdfBtn" style="margin: 5px auto;display: block;width:150px;height:25px;font-size: 1.3rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;">Generate Report</button>
    <button id="downloadPdfBtn" style="display:none;margin: 5px auto;width:150px;height:25px;font-size: 1.3rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;">Download Report</button>
</section>
<section style="position:absolute;top:370px;right:5%">
<div class="main">
    <div class="mail-area">
        <form method="post" action="sendmail.php" enctype="multipart/form-data">
        <div class="input-group" style="margin-bottom: 3px;width: 100%;">
            <input type="email" name="email" class="input" placeholder="Email Id" style="height: 15px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;" required>
        </div>
        <div class="input-group" style="margin-bottom: 3px;width: 100%;">
            <input type="text" name="subject" class="input" placeholder="Subject" style="height: 15px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;" required>
        </div>
        <div class="input-group" style="margin-bottom: 3px;width: 100%;">
            <textarea class="input" name="message" placeholder="Message" style="height: 75px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;" required></textarea>
        </div>
        <div class="input-group" style="margin-bottom: 3px;width: 100%;">
            <input type="file" name="attachment" class="up" style="height: 117px;width: 250px;padding: 10px;font-size: 1.2rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
        </div>
            <input class="input btn" type="submit" name="send" value="Send" style="display:block;margin: 5px auto;width:150px;height:25px;font-size: 1.3rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;">
        </form>
    </div>
    </div>
</section>
<img src="image/Report.gif" alt="" style="position:absolute;top:370px;right:40%;width:300px;">
<script>
        function generatePDFContent() {
            var doc = new jsPDF();
            
            doc.setFillColor(222, 246, 230);
            doc.rect(0, 0, doc.internal.pageSize.getWidth(), 65, 'F');

            var imgData =  'data:image/png;base64,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';
            doc.addImage(imgData, 'png', 10, 10, 36.999, 15);

            var text1 = document.getElementById('myText1').value;
            doc.setFontSize(28);
            var textWidth1 = doc.getStringUnitWidth(text1) * doc.internal.getFontSize() / doc.internal.scaleFactor;
            var textOffset1 = (doc.internal.pageSize.getWidth() - textWidth1) / 2;
            doc.text(text1, textOffset1, 40);



            var text2 = document.getElementById('myText2').value;
            doc.setFontSize(22);
            var textWidth2 = doc.getStringUnitWidth(text2) * doc.internal.getFontSize() / doc.internal.scaleFactor;
            var textOffset2 = (doc.internal.pageSize.getWidth() - textWidth2) / 2;
            doc.text(text2, textOffset2, 50);



            var heading3 = `Patient's Name:`;
            doc.setFontSize(18);
            doc.text(heading3, 47, 90);

            var text3 = document.getElementById('myText3').value;
            doc.setFontSize(15);
            doc.text(text3, 96, 90);



            var heading4 = `Patient's Age:`;
            doc.setFontSize(18);
            doc.text(heading4, 47, 110);

            var text4 = document.getElementById('myText4').value;
            doc.setFontSize(15);
            doc.text(text4, 90, 110);



            var heading5 = `Tests:`;
            doc.setFontSize(18);
            doc.text(heading5, 47, 130);

            var text5 = document.getElementById('myTextarea1').value;
            doc.setFontSize(15);
            doc.text(text5, 82, 130);



            var heading6 = `Medicines:`;
            doc.setFontSize(18);
            doc.text(heading6, 47, 190);

            var text6 = document.getElementById('myTextarea2').value;
            doc.setFontSize(15);
            doc.text(text6, 82, 190);



            var heading7 = `Date:`;
            doc.setFontSize(18);
            doc.text(heading7, 47, 250);

            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth() + 1; 
            var year = date.getFullYear();
            var text7 = day + '/' + month + '/' + year;
            doc.setFontSize(15);
            doc.text(text7, 66, 250);



            var heading8 = `Digital Signature:`;
            doc.setFontSize(18);
            doc.text(heading8, 47, 270);

            var text1;
            doc.setFontSize(15);
            doc.text(text1, 100, 270);


            doc.setLineWidth(1);
            doc.setDrawColor(22, 160, 133);
            doc.line(20, 75, 20, 285);

            doc.setLineWidth(1);
            doc.setDrawColor(22, 160, 133);
            doc.line(190, 75, 190, 285);
            
            doc.setLineWidth(1);
            doc.setDrawColor(22, 160, 133);
            doc.line(20, 75, 190, 75);

            doc.setLineWidth(1);
            doc.setDrawColor(22, 160, 133);
            doc.line(20, 285, 190, 285);
            
            return doc.output('dataurlstring'); // or use 'blob' to save as a file
        }

        let generatedPDF;

        const generateBtn = document.getElementById('generatePdfBtn');
        const downloadBtn = document.getElementById('downloadPdfBtn');
        const patientId = document.getElementById('emailAddress');


        generateBtn.addEventListener('click', () => {
            generatedPDF = generatePDFContent();
            alert('PDF successfully generated!'); 
            downloadBtn.style.display = 'block'; 
        });

        
        downloadBtn.addEventListener('click', () => {
            const link = document.createElement('a');
            link.href = generatedPDF;
            var pdfName = document.getElementById('myText3').value;
            link.download = pdfName +`.pdf`;
            link.click();
        });

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

    </script> 


</body>
</html>


