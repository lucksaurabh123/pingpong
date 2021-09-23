<?php
$conn =mysqli_connect('localhost','root','','newdb');
if(mysqli_connect_errno($conn))
{
    echo 'connection fail.';
}

?>

<!DOCTYPE html>
    <html>
    <head>
        <title>registrationpage</title>
        <link rel="stylesheet" href="newform.css"/>

    </head>
    <body>
<br>

            <div class="box20">
        <u><h1>WELCOME IN LOG IN PAGE</h1></u>
        <u><h1> LOG IN TO PLAY GAME</h1></u>

<br>
<br>
<br>
<br>
<br>

        </div>
        <form action="login.php" method="post">
            <div class="box21">
            Student Number:<br>
            <input type="text" name="studentnumber" placeholder="Student Number"><br>
            <br>
<br>


            User password:<br>
            <input type="password" name="createpassword" placeholder="Password">
            <button type="submit">Log In</button>
            </div>
          </form>
    </body>
    </html>