<?php
session_start();

$con = mysqli_connect('localhost','root','','newdb');


$studentnumber=$_POST['studentnumber'];
$createpassword=$_POST['createpassword'];
$pass2 = md5($_POST['createpassword']);


$s = "select * from dbdetails where StudentNumber = '$studentnumber' && createpassword = '$pass2' " ;


$result = mysqli_query($con,$s);
 $num =mysqli_num_rows($result);

if($num> 0)
{ 
    $_SESSION['student']=$studentnumber;
    header('location:game.php');
}
else
{
        echo "Invalid Username or password.";
}

?>
