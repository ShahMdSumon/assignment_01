<?php


function currencyConv ( $amount , $Currency = 'euro'){

    switch($Currency){

        case "usd";
            $rate= 86.1952;
            $city= "American";
            break;
    
        case "euro";
            $rate= 96.8962;
            $city= "Franch";
            break;
    
        case "pound";
            $rate= 13.7440;
            $city= "British Pound";
            break;
    
        case "cad";
            $rate= 67.6633;
            $city= "Canada";
            break;
    
        case "won";
            $rate= .0718;
            $city= "South Korean";
            break;

        default;
            $rate= 0;
            break;
    }

        $bdt= $amount * $rate;

        echo "{$amount} {$city} {$Currency} = {$bdt} BDT";  


}



?>



