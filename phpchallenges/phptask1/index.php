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

    $fruitsVeggies = array('avocado', 'potato', 'cucumber', 'tomato', 'lettuce', 'banana', 'apple', 'orange', 'peach', 'pear');

    $fruitsVeggies = implode(" ", $fruitsVeggies);

    echo ($fruitsVeggies); 
    echo strpos($fruitsVeggies, 'tomato');
    echo str_replace('cucumber' , 'druiwe', $fruitsVeggies);

    ?>


</body>
</html>