<?php 
session_start();
include('../includes/config.php');
error_reporting(0);
?>

<!DOCTYPE html>
    <nav>
        <a href="#" class="logo">Lings Cars</a>
        <div class="links">
            <a href="../index.php#">Home</a>
            <a href="../cars.php">Cars</a>
            <a href="../index.php#About">About</a>
            <a href="../index.php#Testimonials">Testimonials</a>
            <a href="../cart.php">Cart</a>
        </div>
        <div class="login"> 
        <?php   if(strlen($_SESSION['login'])==0)
	            {
        ?>
            <a href="../signin.php" class="btn">Login / Register</a>
            <?php }else{?>
            <a href="../profile.php" class="btn"><?php
                $email=$_SESSION['login'];
                $sql ="SELECT FullName FROM user WHERE Email=:email ";
                $query= $dbh -> prepare($sql);
                $query-> bindParam(':email', $email, PDO::PARAM_STR);
                $query-> execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                    {
                
                     echo htmlentities($result->FullName); }}
                ?></a>
            <a href="../includes/logout.php" class="btn">Log Out</a>
            <?php }?>
        </div>
   
    </nav>
</html>