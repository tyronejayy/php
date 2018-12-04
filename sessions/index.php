<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions</title>
</head>
<body>
    <!-- session id and session files -->
    <?php

    if ($_POST);

    // $_SESSION['age'] = 368;


    // echo session_id(123);
    // $_SESSION['favColour'] = 'black and white';

    // ?>

    <form action="index.php" method="post">
    <input type="text" name="favcolour" placeholder="Favourite Colour">
    <input type="submit">
    </form>

    <a href="destroy.php">boom</a>
    <a href="colours.php">colours</a>



</body>
</html>