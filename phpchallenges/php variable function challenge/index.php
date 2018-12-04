<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php

    $example_array = array('michael', 'gcobisa', 'tyrone');

    //makes a list
    $array_to_string = implode(' ', $example_array);

    //shows strings
    $back_to_the_arrays = explode(' ', $array_to_string);

    ?>

    <?php
    //do they have the same data type or do they have the same value
        === 
    //
    ?>
    
</body>
</html>