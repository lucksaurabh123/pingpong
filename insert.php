<?php
session_start();

$con = mysqli_connect('localhost','root','','newdb');


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$branch=$_POST['branch'];
$studentnumber=$_POST['studentnumber'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$createpassword=$_POST['createpassword'];
$confirmpassword=$_POST['confirmpassword'];
$pass1 = md5($_POST['createpassword']);


$s = "select * from dbdetails where StudentNumber = '$studentnumber'";


$result = mysqli_query($con,$s);
 $num =mysqli_num_rows($result);

if($num == 1)
{
    echo"Student number already used";
}
else
{
    if($createpassword==$confirmpassword)
    {
        $reg="INSERT INTO dbdetails (FirstName,LastName,Branch,StudentNumber,mobileno,Email,createpassword) values ('$firstname', '$lastname', '$branch', '$studentnumber', '$mobileno', '$email', '$pass1')";
        mysqli_query($con,$reg);
        echo "Registration successful";
    }
    else{
        echo "Password do not match.";
    }

}

?>
