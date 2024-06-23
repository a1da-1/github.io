<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
    <title>Homepage</title>
</head>

<body>

    <?php include('includes/header.php');?></br></br></br>
        
    <div class="carimage">
        <img src="img/car.jpg.png">
    </div>
    
    <h2 class="separator">
        Proton Saga
    </h2>

    <div class="car-selects">
        <div class="car-lists">
            <div class="item">
                <h3>Registered Year</h3></br>
                <p>2013</p>
            </div>
            <div class="item">
                <h3>Bluetooth</h3></br>
                <p>YES</p>
            </div>
            <div class="item">
                <h3>Seats Capacity</h3></br>
                <p>6</p>
            </div>
        </div>

    </div>
    
    <div class="lease-car">
        <div class="item">
            <div class="header">
                <h5>Vehicle Overview</h5>
            </div>
            <p>The name 'Saga' is an acronym for 'Safety, Achievement, Greatness, and Ability'. In Malay, 'Saga' refers to the hard red seed (abrus precatorius) of the Saga tree. The Proton Saga is also a well-known national symbol of Malaysia.</p>
        </div>
        <div class="item">
            <form action="login.php" method="post">
                <h2>Book Now</h2></br>
                <input type="text" placeholder="From Date: dd/mm/yyyy">
                <input type="text" placeholder="To Date: dd/mm/yyyy">
                <button type="submit" class="btn">Book</button>
                
            </form>
        </div>
    </div>
   

    <footer>
        <?php include('includes/footer.php');?>
    </footer>

</body>

</html>