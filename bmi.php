<?php


function bodyIndex($weight, $height){

    $bmi = $weight/($height*$height);


    if ($bmi < 18.5){
        echo " You are Underweight  ";
    }
    elseif ($bim >=18.5 && $bim <= 24.9) {
        echo " You are Normal weight  ";
    }
    elseif ($bim >=25 && $bim <= 29.9) {
        echo " You are Overweight ";
    }

    elseif ($bim >= 30) {
        echo " You are Obesity ";
    }

}



?>