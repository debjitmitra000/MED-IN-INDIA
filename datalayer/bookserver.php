<?php  

$errors=array();
include ('server.php');

$mysqli = new mysqli("localhost","root","","registration");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if (isset($_POST['Book'])) {
    // Retrieve form data
    $AppoID = $mysqli->real_escape_string($_POST['AppoID']);
    $Date = $mysqli->real_escape_string($_POST['Date']);
    $Time = $mysqli->real_escape_string($_POST['Time']);

    // Validate form data
    if (empty($AppoID)) {
        array_push($errors, "Appointment ID is required");
    }

    if (empty($Date)) {
        array_push($errors, "Date is required");
    }

    if (empty($Time)) {
        array_push($errors, "Time is required");
    }

	$existingAppointmentQuery = "SELECT * FROM bookapp WHERE Date = '$Date' AND Time = '$Time'";
    $existingAppointmentResult = $mysqli->query($existingAppointmentQuery);

    if ($existingAppointmentResult && $existingAppointmentResult->num_rows > 0) {
        // If there are existing appointments, display an error message
        // array_push($errors, "Booking for the same date and time is not allowed");
		echo "<script>alert('Booking for the same date and time is not allowed')</script>";
    } else {
    // Retrieve additional data from the form
    $docID = $mysqli->real_escape_string($_POST['docID']);
    $userprofile = $_SESSION['UserID']; // Assuming this holds the user's ID

    // Construct and execute the SQL query
    $sql = "INSERT INTO bookapp (AppoID, Date, Time, patientID, docID) VALUES ('$AppoID', '$Date', '$Time', '$userprofile', '$docID')";
    $result = $mysqli->query($sql);

    // Check if the query executed successfully
    if ($result) {
        // Fetch the doctor's name from the database based on the selected docID
        $queryDoctor = "SELECT DoctorName FROM doctor WHERE DoctorID='$docID'";
        $resultDoctor = $mysqli->query($queryDoctor);
        $doctorName = "";
        if ($resultDoctor && $resultDoctor->num_rows > 0) {
            $doctorData = $resultDoctor->fetch_assoc();
            $doctorName = $doctorData['DoctorName'];
        }

        // Retrieve the last inserted ID
        // $meetingID = $mysqli->insert_id;

        // Prepare data for JavaScript alert

        // Pass the meeting ID, selected date, time, and doctor name to JavaScript
        echo "<script>";
        echo "alert('Appointment booked successfully!\\nDate: $Date\\nTime: $Time\\nDoctor: $doctorName');";
        echo "window.location.href = 'book.php';";
        echo "</script>";
        exit;
    } else {
        array_push($errors, "Failed to book appointment");
    }
}
}

if (isset($_POST['cancel'])) {

		$AppoID2 =$mysqli -> real_escape_string($_POST['AppoID2']);

	if (empty($AppoID2)) {
	array_push($errors,"Appointment ID is required");
}
 if (count($errors)==0) {
	$query5 = "DELETE FROM bookapp WHERE AppoID='$AppoID2' AND patientID='$userprofile'";
        $result = $mysqli->query($query5);

        // Check if the query executed successfully
        if ($result) {
            if ($mysqli->affected_rows > 0) {
                echo "<script>alert('Appointment with ID $AppoID2 is canceled');</script>";
            } else {
                array_push($errors, "Wrong Appointment ID");
            }
        } else {
            array_push($errors, "Failed to cancel appointment");
        }
    }
}


if (isset($_POST['Add'])) {
	$addID 				= $mysqli -> real_escape_string($_POST['addID']);
	$addname 			= $mysqli -> real_escape_string($_POST['addname']);
	$addAddress 		= $mysqli -> real_escape_string($_POST['addAddress']);
	$addContactNumber	= $mysqli -> real_escape_string($_POST['addContactNumber']);
	$addEmail 			= $mysqli -> real_escape_string($_POST['addEmail']);
	$addPassword 		= $mysqli -> real_escape_string($_POST['addpassword']);
	if (empty($addID)) {
	array_push($errors,"Doctor ID is required");
	# code...
}

if (empty($addname)) {
	array_push($errors,"Doctor Name is required");
	# code...
}


if (empty($addAddress)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($addContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($addEmail)) {
	array_push($errors,"Email is required");
	# code...
}

if (empty($addPassword)) {
	array_push($errors,"Password is required");
	# code...
}
if(count($errors)==0){

		$addcategory 	= $_REQUEST['addcategory'];


	$sqladd = "INSERT INTO  doctor (DoctorID, Doctorname, email, Address, ContactNumber, password,categorey) VALUES ('$addID','$addname','$addEmail','$addAddress','$addContactNumber','$addPassword','$addcategory') ";



	if ($mysqli -> query($sqladd)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);
}
  $_SESSION['addID']=$addID;
  $_SESSION['success']="you are now logged in";
  header('location:index3.php');
}
}
if (isset($_POST['Delete'])) {

		$deleteID =$mysqli -> real_escape_string($_POST['deleteID']);

	if (empty($deleteID)) {
	array_push($errors,"Doctor ID is required");
}
 if (count($errors)==0) {
	$querydelete="DELETE FROM doctor WHERE DoctorID='$deleteID' ";
	if ($mysqli -> query($querydelete)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Doctor ID");
			
			# code...
		}

	}
	  else {
	  
	  echo 'Book is Canceled';
	  


	  }

	}
}

?>

<!-- $query1="SELECT categorey FROM doctor";
   $result1= mysqli_query($mysqli, $query1);
   $opt="<select name='Categorey'>";
   while ($row= mysqli_fetch_assoc($result1)) {
   	$opt.="<option value ='{$row['categorey']}'>{$row['categorey']}</option>";
   }
   	$opt.="</select>";
   

 

  
   }

}
-->


