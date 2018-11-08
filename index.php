<!DOCTYPE html>
<html>
<head>
    <title>Variables</title>
</head>
<body>

<p>hi, salaaaaaaam</p>

<?php

$example = 'where in the world is carmen sandiego';

echo substr($example, strpos($example,'1'), strpos($example,'d')-strpos($example.'i')+1);
//positive goes right, negative goes left

echo str_replace('where' , 'who', $example);
//string replace, replaces word in string 'where' with 'who'



// ==========================================================================================================




//NORMAL INDEXED ARRAY//
//arrays are a type of variable/object
$example_array = array('toyota', 'bmw', 'ferrari', 'hot wheels');

// echo $example_array;

echo $example_array[0];

//to see whats inside an array while programming, not output
var_dump;

//==================================================================================================

$tyrone = array('age' => 21, 'hair' => crispy, 'height' => 'super-tall');

echo $tyrone['height'];

//an associative array
$reagan['height'] = 'super-tall';

echo $reagan['height'];

//3rd kind of array ... can contain array in an array...multidimensional associative arrays

$example_array =
array('numbers' =>
    array(
        2,3,4,5
    ),
    'cars' => array(
        'jaguar', 'opel', 'fiat'
    ));

echo $example_array['cars'][0];

$example_array['people'] = array('reagan', 'nicholas', 'gedeon');

var_dump($example_array);

//sorting arrays
sort(); //sorting in alphabetical order
rsort(); // sorting in reverse


?>


</body>
</html>