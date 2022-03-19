<?php

function getarea( $type = ' s',  $len,  $wid){

    $area = ' ';
    $area_type = ' ';

    switch  ($type){

        case 'r':
            $area = $len * $wid;
            $area_type = 'rectangle';
            break;

        case 's':
            $area = $len * $len ;
            $area_type = 'square';
            break;

        case 't':
            $area = .5 * ($len * $wid) ;
            $area_type = 'triangle';
            break;
    
        case 'c':
            $area = 3.1416 * ($len * $len) ;
            $area_type = 'circle';
            break;

        default:
            $area = 'default' ;
            $area_type = 'default';
            break;

    }

        return " The area of  {$area_type} is {$area} ";

}

?>