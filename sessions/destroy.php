<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 

    echo session_id();


    if ($_SESSION) {
        echo "There is a session";
    } else {
        echo "there is no session";
    }


    ?>

    <br>

    <a href="index.php">home</a>




</body>
</html>