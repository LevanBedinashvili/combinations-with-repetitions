<?php

function mycombinations($chars, $size, $combinations = array()) {
    if (empty($combinations)) {
       $combinations = $chars;
    }
    if ($size == 1) {
       return $combinations;
    }
    $new_combinations = array();
    foreach ($combinations as $combination) {
       foreach ($chars as $char) {
          $new_combinations[] = $combination ." ". $char;
       }
    }
    return mycombinations($chars, $size - 1, $new_combinations);
 }
 $chars = array('erti', 'ori', 'sami', "otxi", "xuti", "eqvsi");
 $output = mycombinations($chars, 6);


for($i = 0; $i < count($output); $i++){
    echo $output[$i];
    echo "<br>";
}