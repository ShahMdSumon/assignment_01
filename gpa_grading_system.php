<?php


function gpa(int  $bangla = null, int $math = null, int $eng = null){

    if($bangla >=80 && $bangla <= 100){
        echo "Bangla  Letter Grade:  <span  style = 'font-weight:bold';> A+ </span>   Grade Point : <span  style = 'font-weight:bold';> 5 </span>  </br> </br>";
    }
    elseif($bangla >= 70 && $bangla <= 79){
        echo "Bangla Letter Grade  <span  style = 'font-weight:bold';> A </span>   Grade Point : <span  style = 'font-weight:bold';> 4 </span>  </br> </br>";
    }
    elseif ($bangla >=60 && $bangla <=69) {
        echo "Bangla Letter Grade  <span  style = 'font-weight:bold';> A- </span>   Grade Point : <span  style = 'font-weight:bold';> 3.5 </span>  </br> </br>";
    }
    elseif ($bangla >= 50 && $bangla <= 59) {
        echo "Bangla Letter Grade  <span  style = 'font-weight:bold';> B </span>   Grade Point : <span  style = 'font-weight:bold';> 3 </span>  </br> </br>";
    }
    elseif ($bangla >= 40 && $bangla <= 49) {
        echo "Bangla Letter Grade  <span  style = 'font-weight:bold';> C </span>   Grade Point : <span  style = 'font-weight:bold';> 2 </span>  </br> </br>";
    }
    elseif ($bangla >= 33 && $bangla <= 39) {
        echo "Bangla Letter Grade  <span  style = 'font-weight:bold';> D </span>   Grade Point : <span  style = 'font-weight:bold';> 1 </span>  </br> </br>";
    }
    elseif ($bangla >= 0 && $bangla <= 32) {
        echo "Bangla Letter Grade  <span  style = 'font-weight:bold';> F </span>   Grade Point : <span  style = 'font-weight:bold';> 0 </span>  </br> </br>";
    }
    if($math >=80 && $math <= 100){
        echo "Bangla  Letter Grade  <span  style = 'font-weight:bold';> A+ </span>   Grade Point : <span  style = 'font-weight:bold';> 5 </span>  </br> </br>";
    }
    elseif($math >= 70 && $math <= 79){
        echo "Math Letter Grade  <span  style = 'font-weight:bold';> A </span>   Grade Point : <span  style = 'font-weight:bold';> 4 </span>  </br> </br>";
    }
    elseif ($math >=60 && $math <=69) {
        echo "Math Letter Grade  <span  style = 'font-weight:bold';> A- </span>   Grade Point : <span  style = 'font-weight:bold';> 3.5 </span>  </br> </br>";
    }
    elseif ($math >= 50 && $math <= 59) {
        echo "Math Letter Grade  <span  style = 'font-weight:bold';> B </span>   Grade Point : <span  style = 'font-weight:bold';> 3 </span>  </br> </br>";
    }
    elseif ($math >= 40 && $math <= 49) {
        echo "Math Letter Grade  <span  style = 'font-weight:bold';> C </span>   Grade Point : <span  style = 'font-weight:bold';> 2 </span>  </br> </br>";
    }
    elseif ($math >= 33 && $math <= 39) {
        echo "Math Letter Grade  <span  style = 'font-weight:bold';> D </span>   Grade Point : <span  style = 'font-weight:bold';> 1 </span>  </br> </br>";
    }
    elseif ($math >= 0 && $math <= 32) {
        echo "Math Letter Grade  <span  style = 'font-weight:bold';> F </span>   Grade Point : <span  style = 'font-weight:bold';> 0 </span>  </br> </br>";
    }
    if($eng >=80 && $eng <= 100){
        echo "English  Letter Grade  <span  style = 'font-weight:bold';> A+ </span>   Grade Point : <span  style = 'font-weight:bold';> 5 </span>  </br> </br>";
    }
    elseif($eng >= 70 && $eng <= 79){
        echo "English Letter Grade  <span  style = 'font-weight:bold';> A </span>   Grade Point : <span  style = 'font-weight:bold';> 4 </span>  </br> </br>";
    }
    elseif ($eng >=60 && $eng <=69) {
        echo "Englishh Letter Grade  <span  style = 'font-weight:bold';> A- </span>   Grade Point : <span  style = 'font-weight:bold';> 3.5 </span>  </br> </br>";
    }
    elseif ($eng >= 50 && $eng <= 59) {
        echo "English Letter Grade  <span  style = 'font-weight:bold';> B </span>   Grade Point : <span  style = 'font-weight:bold';> 3 </span>  </br> </br>";
    }
    elseif ($eng >= 40 && $eng <= 49) {
        echo "English Letter Grade  <span  style = 'font-weight:bold';> C </span>   Grade Point : <span  style = 'font-weight:bold';> 2 </span>  </br> </br>";
    }
    elseif ($eng >= 33 && $eng <= 39) {
        echo "English Letter Grade  <span  style = 'font-weight:bold';> D </span>   Grade Point : <span  style = 'font-weight:bold';> 1 </span>  </br> </br>";
    }
    elseif ($eng >= 0 && $eng <= 32) {
        echo "English Letter Grade  <span  style = 'font-weight:bold';> F </span>   Grade Point : <span  style = 'font-weight:bold';> 0 </span>  </br> </br>";
    }
    else {
        echo "The Number Is Invailed";
}

}





?>