<?php

    $total = 0;

    $input = $argv[1];
    
    $inputArray = explode(" ", $input);

foreach( $inputArray as $value){
    $type = substr($value, -1);
    switch($type){
        case "s":
            $subtotal = $value * 1;
            $total += $subtotal;
        break;


        case "m":
            $subtotal = $value * 60;
            $total += $subtotal;
        break;


        case "u":
            $subtotal = $value * 3600;
            $total += $subtotal;
        break;


        case "d":
            $subtotal = $value * 86400;
            $total += $subtotal;
        break;


    }

}
echo($total." seconds");

?>