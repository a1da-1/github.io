<?php 
session_start();
include('config.php');

if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT Email,Password,FullName FROM user WHERE Email=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
} else{
  echo "<script>alert('Invalid Details');</script>";
  echo "<script type='text/javascript'> document.location = '../signin.php'; </script>";
}
}
?>
