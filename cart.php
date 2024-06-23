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

    <?php include('includes/header.php');?></br ></br ></br></br ></br >
    
    <h2 class="separator">
        Cart
    </h2>

    <div class="car-selectt">
        <div class="car-listt">
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
                    <a href="Quote.html">Rent Now</a>
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
                    <a href="Quote.html">Rent Now</a>
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
                    <a href="Quote.html">Rent Now</a>
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
                    <a href="Quote.html">Rent Now</a>
                </div>
            </div>
            <form action="login.php" method="post">
                <button type="submit" class="btn">Check Out</button>
            </form>
        </div>
    </div>

    <footer>
        <?php include('includes/footer.php');?>
    </footer>

</body>

</html>