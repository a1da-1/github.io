<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/cars.css">
    <title>Cars</title>
</head>

<body>

    <?php include('includes/header.php');?>

</br></br></br></br></br>

    <div id="Vehicles">
    <h2 class="separator">
        Cars
    </h2>

    <div class="car-select">
        <div class="category">
            <a href="cars/carshonda.php">Honda</a>
            <a href="cars/carstoyota.php">Toyota</a>
            <a href="cars/carsproton.php">Proton</a>
            <a href="cars/carsperodua.php">Perodua</a>
        </div>
            <?php include('cars/includes/fullcar.php');?>
    </div>
    </div>


    <footer>
        <?php include('includes/footer.php');?>
    </footer>

</body>

</html>