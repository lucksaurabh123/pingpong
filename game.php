<?php
session_start();
if(!isset($_SESSION['student']))
{
    header('location:newform.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<head>
    <title>Game JavaScript</title>
    <style>
        body{
            background-color: dimgray;
        }
        #game{
            border: 2px solid #FFF;
            position: absolute;
            margin :auto;
            top:0;
            right:0;
            left:0;
            bottom:0;
        }

    </style>
</head>
<body>


 <h3 style="color:white;">HI!!....<?php echo $_SESSION['student']?></h3> 
        <div class="php" align=right><a href="Logout.php">LOG OUT</a></div>




   <canvas id="game" width="600" height="400"></canvas>
   <script src="gamej.js"></script>
</body>
</html>