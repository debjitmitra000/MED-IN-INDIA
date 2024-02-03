<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All LOGIN</title>
    <script src="https://kit.fontawesome.com/125372cbb9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="Doctorpatient.css">
</head>
<style>
    #container {
        background-color: #fff;
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        width: 500px;
        margin: auto;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-size: 16px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    button {
        background-color: var(--green);
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #16a085;
    }

    #result {
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    #history {
        margin-top: 30px;
    }

    #historyTable {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    #historyTable th,
    #historyTable td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    #historyTable th {
        background-color: #16a085;
        color: #fff;
    }

    #historyTable tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    footer {
        position: absolute;
        bottom: auto;
        background-color: lightgray;
        color: #16a085;
        height: 10vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        margin-top: 20px;
    }

    #healthChart {
        max-width: 600px;
        max-height: 400px;
    }

    .chart {
        width: 100%;
        display: flex;
        justify-content: center;
    }
</style>

<body>
    <!--header section starts-->
    <header class="headr">
        <div class="image1">
            <a href="#home" class="logo" style="margin-left:50px;"><img src="image/Logo.png" alt="" height="50px"></i></a>
        </div>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#login">Login</a>
            <a href="#health">Health Tracker</a>
            <a href="nearesthospital.php">Nearest Hospital</a>
        </nav>
    </header>
    <!--header section starts-->
    <!--Home Section start-->
    <section class="home" id="home">
        <div class="image"></div>
    <!--Home Section Ends-->
</body>