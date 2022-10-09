<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/constyle.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Contact Us</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="welcome.php"><img src="logo.png" alt=""></a>
            </div>
            <div class="search">
                <input type="text" name="button" placeholder="Serach Here">
                <button class="btn">Search</button>
            </div>
            <ul>
                <li><a href="welcome.php">Home</a></li>
                <li><a href="/partials/men.php">Men</a></li>
                <li><a href="/partials/women.php">Women</a></li>
                <li> <a href="Contact.php">ContactUs</a></li>
                <li> <a href="logout.php">Logout</a></li>
            </ul>
            
        </nav>
    </header>
    <div class="container">
        <h1>Contact Us</h1><br>

        <div class="email">
            <h4>Email: marginnasit333@gmail.com</h4>
            <br>
            <h4> Mobile Number: 7202894058</h4>
            <br>
            <br>
            <Address>
                <b>Address: 103, Rajwadi PVT.LTD in Gomatinagar, Ahemdabad </b>
            </Address>
        </div>
    </div>
</body>

</html>