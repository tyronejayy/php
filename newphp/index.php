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

// xor; //one or the other; either one but not both
// else; //
// if; //incase you want to do a primary thing
// if else; //if you want to do two things
// if else if; //three things

// $i= 4;

// $age = 26;

// $logged_in = false;

// $bob = array(
//     'car' => array(
//         'model' => 'm8',
//         'make' => 'BMW',)
//     'pets' => 'cat');

// if ($bob['car']['make'] == 'BMW') {
//     echo 'yay';
//     if ($bob['pets']=='cat') {
//         echo 'achoo';
//     }
// } else {
//     echo 'nay';
// }

//*******************************************//

// $light = 'red';

// switch ($light) {
//     case 'red':
//         echo 'stop'
//         break;
//     case 'green':
//         echo 'go'
//         break;
//     case 'yellow':
//         echo 'slow down'
//         break;
    
//     default:
//         echo 'treat as 4-way stop'
//         break;
// }

//*******************************************//
//*******************************************//

$example_array = array('natheer', 'gedeon', 'reagan', 'michael', 'gcobisa', 'evan', 'taariq', 'josh', 'taufeeq', 'jp', 'x', 'tyrone', 'urick', 'marlon', 'kaylem', 'jesse');
$class_size = count($example_array);
?>
<ul>
<?php
for ($i = 0; $i<$class_size; $i++) {
    echo $i;
    $length = count($example_array);
    $chosen = rand(0,length-1);
    $output = array_splice($example_array, $chosen, 1);

?>
    <li><?php echo $output[0] ?></li>
<?php
}

?>

</ul>

<!--WHILE LOOPS-->

<?php

$a = 11;
do {
    echo "i live twice";
    $a++;
}

while ($a <= 10) {
    echo "<li>i am working</li>";
$a++;
}

$i = 0;

while ($i <=10);
    echo $a;

?>

<!-- END OF LOOPS -->
<!-- END OF LOOPS -->

<?php

$drinks = array('klipdrift', 'russian bear', 'olmeca', 'hunters', 'jack daniels');

$chasers = array('jive', 'sprite', 'cranberry juice');
'</br>''</br>'
?>

<ul>
<?php

foreach ($drinks as $drinks) {
    echo "<li>";
    foreach ($chasers as $chaser) {
        echo $key ." and " . $chaser . " ";
    }
    echo "</li>";
}

?>

<!-- END OF LOOPS -->

<form action="/form.php" method="POST">

<input type="text" name="name" placeholder="name">

<input type="text" name="surname" placeholder="surname">

<button type="submit">SUBMIT!</button>

</form>

<?php
var_dump($_POST);
?>

<!-- END OF LOOPS -->


<?php if (!$_POST) { ?>

<?php } else {?>
    <p>Hello there <?php echo $_POST['name'] ?></p>

<?php }?>
</body>
</html>