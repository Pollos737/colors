<?php

function getColor($color){
    $colorsNeeded = array();
    switch($color){
        case 'green':
            array_push($colorsNeeded, "Blue", "Yellow");
            break;
        case 'pink':
            array_push($colorsNeeded, "Red", "White");
        default:
            $colorsNeeded = "<h1>This color is not supported, check back soon!</h1>";;
            break;
    }
    
    return $colorsNeeded;
 
}

