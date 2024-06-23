<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['updateprofile']))
  {
$name=$_POST['fullname'];
$phoneno=$_POST['phoneno'];
$bday=$_POST['bday'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$email=$_SESSION['login'];
$sql="UPDATE user SET FullName=:name,PhoneNo=:phoneno,Bday=:bday,Address=:address,City=:city,Country=:country where Email=:email";
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':phoneno',$phoneno,PDO::PARAM_STR);
$query->bindParam(':bday',$bday,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':country',$country,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$msg="Profile Updated Successfully";
echo "<script>alert('Profile Updated Successfully');</script>";
echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/cars.css">
    <link rel="stylesheet" href="css/quote.css">
    <title>Profile</title>

    <style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
</head>

<body>

    <?php include('includes/header.php');?>

</br></br></br></br></br>

    <h2 class="separator">
        Profile
    </h2>

    <div class="car-select">
        <div class="category">
            <a class="active" href="profile.php#">User Info</a>
            <a href="profile/booking.php#">My Booking</a>
            <a href="profile/posttestimonial.php#">Post a Testimonial</a>
            <a href="profile/mytestimonial.php#">My Testimonial</a>
            <a href="profile/updatepassword.php#">Update Password</a>
        </div>
    </div>

    <?php 
$useremail=$_SESSION['login'];
$sql = "SELECT * from user where Email=:useremail";
$query = $dbh -> prepare($sql);
$query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

        

    <div class="content">
      
         
          <form  method="post">
            </br></br>
            <h5><?php echo htmlentities($result->FullName);?></h5>
            <p><?php echo htmlentities($result->Address);?><br>
            <?php echo htmlentities($result->City);?>&nbsp;<?php echo htmlentities($result->Country);?></p>

          <?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
          </br>
            <label>Registration Date -</label>
            <?php echo htmlentities($result->RegDate);?></br>
            
            <?php if($result->UpdDate!=""){?>
        
                </br>
            <label>Last Update at -</label>
             <?php echo htmlentities($result->UpdDate);?>
      
            <?php } ?></br></br></br>
            <label>Full Name</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo htmlentities($result->FullName);?>" required>
            </br>
            <label>Email Address</label>
            <input type="email" id="email" name="email" value="<?php echo htmlentities($result->Email);?>" required>
            </br>
            <label>Phone Number</label>
            <input type="text" id="phoneno" name="phoneno" value="<?php echo htmlentities($result->PhoneNo);?>" required>
            </br>
            <label>Birthday (dd/mm/yyyy)</label>
            <input type="text" id="bday" name="bday" placeholder="dd/mm/yyyy" value="<?php echo htmlentities($result->Bday);?>">
            </br>
            <label>Address</label>
            <textarea name="address" rows="4"><?php echo htmlentities($result->Address);?></textarea>
            </br>
            <label>City</label>
            <input type="text" id="city" name="city" value="<?php echo htmlentities($result->City);?>">
            </br>
            <label>Country</label>
            <input type="text" id="country" name="country" value="<?php echo htmlentities($result->Country);?>">

            <?php }
        } ?>
            </br></br>
            <button type="submit" name="updateprofile" class="btn">Save Changes</button> 
            </br></br></br>
        </form>
    </div>

</br></br>
    <footer>
        <?php include('includes/footer.php');?>
    </footer>

</body>

</html>