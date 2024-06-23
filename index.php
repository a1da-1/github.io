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

    <?php include('includes/header.php');?>

    <header>
        <div class="left">
            <h1>LINGsCARS.com</h1>
            <p>Kuching's craziest car leasing website.
                We offer amazing deals for you, 
                start your journey with us now!</p>
            <form>
                <input type="text" placeholder="Enter car's model..">
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
        <img src="img/car.jpg.png">
    </header>
    
    <div id="About">
    <h2 class="separator">
        Why Choose Us?
    </h2>
    </div>
    <div class="lease-car">
        <div class="item">
            <div class="header">
                <i class='bx bx-wallet-alt'></i>
                <h5>Committed</h5>
            </div>
            <p>Our commitment is to deliver outstanding customer service while 
            upholding the principle of treating you fairly.</p>
        </div>
        <div class="item">
            <div class="header">
                <i class='bx bx-cart-alt'></i>
                <h5>Privacy</h5>
            </div>
            <p>We have a data protection law policy take reasonable care to prevent 
            any unauthorised access to your personal data.</p>
        </div>
        <div class="item">
            <div class="header">
                <i class='bx bx-grid-alt'></i>
                <h5>Trustworthy</h5>
            </div>
            <p>We publish all the best and cheapest deals we can source. Trust
             us to deliver the most impressive deals!</p>
        </div>
    </div>

    <div id="Vehicles">
    <h2 class="separator">
        Best Sellers
    </h2>

    <div class="car-select">
        <div class="category">
            <a href="cars/carshonda.php">Honda</a>
            <a href="cars/carstoyota.php">Toyota</a>
            <a href="cars/carsproton.php">Proton</a>
            <a href="cars/carsperodua.php">Perodua</a>
        </div>

        <div class="car-list">
            <div class="item">
                <img src="img/car1.jpg.png">
                <div class="info">
                    <div>
                        <h5>Satria</h5>
                        <div class="btc">
                            <i class='bx bxl-bitcoin'></i>
                            <p>Proton</p>
                        </div>
                    </div>
                </div>
                <div class="bid">
                    <a href="bookings.php">Rent Now</a>
                </div>
            </div>
            <div class="item">
                <img src="img/car2.jpg.png">
                <div class="info">
                    <div>
                        <h5>Yaris</h5>
                        <div class="btc">
                            <i class='bx bxl-bitcoin'></i>
                            <p>Toyota</p>
                        </div>
                    </div>
                </div>
                <div class="bid">
                    <a href="bookings.php">Rent Now</a>
                </div>
            </div>
            <div class="item">
                <img src="img/car3.jpg.png">
                <div class="info">
                    <div>
                        <h5>Accord</h5>
                        <div class="btc">
                            <i class='bx bxl-bitcoin'></i>
                            <p>Honda</p>
                        </div>
                    </div>
                </div>
                <div class="bid">
                    <a href="bookings.php">Rent Now</a>
                </div>
            </div>
            <div class="item">
                <img src="img/car4.jpg.png">
                <div class="info">
                    <div>
                        <h5>Ativa</h5>
                        <div class="btc">
                            <i class='bx bxl-bitcoin'></i>
                            <p>Perodua</p>
                        </div>
                    </div>
                </div>
                <div class="bid">
                    <a href="bookings.php">Rent Now</a>
                </div>
            </div>
        </div>

    </div>
    </a>

    <div id=Testimonials>
    <h2 class="separator">
        Testimonials
    </h2>
</div>

    <div class="sellers">
        <div class="item">
            <img src="img/car5.jpg.png">
            <div class="info">
                <h4>CR-V</h4>
                <p>1.2K</p>
            </div>
        </div>
        <div class="item">
            <img src="img/car6.jpg.png">
            <div class="info">
                <h4>MG ZX Exclusive</h4>
                <p>2.7K</p>
            </div>
        </div>
        <div class="item">
            <img src="img/car7.jpg.png">
            <div class="info">
                <h4>New MG ZS</h4>
                <p>2.9K</p>
            </div>
        </div>
        <div class="item">
            <img src="img/car8.jpg.png">
            <div class="info">
                <h4>MG ZX Excite</h4>
                <p>1.2K</p>
            </div>
        </div>
    </div>

    <footer>
        <?php include('includes/footer.php');?>
    </footer>

</body>

</html>