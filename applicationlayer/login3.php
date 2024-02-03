<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin LOGIN</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style0.css">
</head>
<body class="Abody">
<header class="header">
	<a href="#" class="logo" style="margin-left: 50px;"><img src="image/LOGO.png" alt="" height="50px"></i></a>
	<nav class="navbar">
		<a href="Doctorpatient.php">Home</a>
	</nav>
</header>
<img id="gif" src="image/Adminpic.gif" alt="">
<Section>
	<div class="Aheader">
		<h2>Admin Login</h2>
	</div>

	<form method="post" action="login3.php" class="Aform">

		<?php include ('../datalayer/errors.php')?>

		<div class="input-groupA">
			<label>Admin ID</label>
			<input type="text" name="adminID">

		</div>




		<div class="input-groupA">
			<label>Password</label>
			<input type="Password" name="adminpassword">



		<div class="input-groupA">
			<button type="submit" name="Login3" class="btnA"> Login</button>
		</div>
	</form>
</Section>
</body>
</html>