<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor LOGIN</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body class="Dbody">

<header class="header">
<a href="#" class="logo" style="margin-left: 50px;"><img src="image/LOGO.png" alt="" height="50px"></i></a>
<nav class="navbar">
    <a href="Doctorpatient.php">Home</a>
</nav>
</header>
<img id="gif" src="image/Doctorpic.gif" alt="">
	
<section>
	<div class="Dheader">
		<h2>Doctor Login</h2>
	</div>
	<form method="post" action="login2.php" class="Dform">

		<?php include ('../datalayer/errors.php')?>

		<div class="input-groupD">
			<label>Doctor ID</label>
			<input type="text" name="doctorID">

		</div>




		<div class="input-groupD">
			<label>Password</label>
			<input type="Password" name="doctorpassword">
		</div>


		<div class="input-groupD">
			<button type="submit" name="Login2" class="btnD"> Login</button>
		</div>

	</form>
</section>
</body>
</html>