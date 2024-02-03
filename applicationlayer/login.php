<?php
// session_start();
include('../datalayer/server.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Patient LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header class="header">
        <a href="#" class="logo" style="margin-left: 50px;"><img src="image/LOGO.png" alt="" height="50px"></i></a>
        <nav class="navbar">
            <a href="Doctorpatient.php">Home</a>
        </nav>
    </header>
    <img id="gif" src="image/Patientpic.gif" alt="">
    <section>
        <div class="formheader">
            <h2>Patient Login</h2>
        </div>
        <form method="post" action="login.php">
            <?php include('../datalayer/errors.php') ?>
            <div class="input-group">
                <label>User ID</label>
                <input type="text" name="UserID">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="Password" name="password">
            </div>

            <div class="input-group">
                <button type="submit" name="Login" class="btn">Login</button>
            </div>
            <p>
                Don't have An Account?<a href="1st.php">Sign Up</a>
            </p>
        </form>
    </section>
</body>