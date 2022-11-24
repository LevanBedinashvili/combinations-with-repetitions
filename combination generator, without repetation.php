<?php

function sampling($chars, $size, $combinations = array()) {

    if (empty($combinations)) {
        $combinations = $chars;
    }
    
    if ($size == 1) {
        return $combinations;
    }
    
    $new_combinations = array();
    
    foreach ($combinations as $key=>$combination) {
    
        foreach ($chars as $char) {
    
            if($combination != $char && !preg_match("/{$char}/i", $combination)){
               
                $new_combinations[] = $combination . $char;
            }   
        }
    }
    
    return sampling($chars, $size - 1, $new_combinations);
    }
    
    $chars = array(1, 2, 3, 4, 5, 6);
    $output = sampling($chars, 4);
    echo "<pre>";
    print_r($output);
    echo "</pre>";