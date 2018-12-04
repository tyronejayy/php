<?php

$example = array(
    array(
        array(
            'aardvark', 'apple', 'actor'
        ),
        array(
            'baby', 'bottle', 'board'
        ),
        array(
            'cow', 'car', 'cats'
        ),
    ),
    array(
        array(
            'xylophone', 'xenophobia', 'xanax'
        ),
        array(
            'yacht', 'yanking', 'yak'
        ),
        array(
            'zebra', 'zip-line', 'zit'
        ),
    ),
);


function array_output($array) {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            array_output($value);
        } else {
            echo $value;
        }
    }
}
?>