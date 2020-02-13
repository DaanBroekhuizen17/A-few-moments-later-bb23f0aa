<?php

    $total = 0;

    $input = $argv[1];
    
    $inputArray = explode(" ", $input);

foreach( $inputArray as $value){
    $type = substr($value, -1);
    $int = substr($value, 0, -1);
    switch($type){
        case "s":
            $subtotal = $int * 1;
            $total += $subtotal;
        break;


        case "m":
            $subtotal = $int * 60;
            $total += $subtotal;
        break;


        case "u":
            $subtotal = $int * 3600;
            $total += $subtotal;
        break;


        case "d":
            $subtotal = $int * 86400;
            $total += $subtotal;
        break;

        case "y":
            $subtotal = $int * 31556926;
            $total += $subtotal;
        break;

        case "b":
            $subtotal = $int * 63113852000;
            $total += $subtotal;
        break;


    }

}
echo($total." seconds");

?>