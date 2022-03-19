<?php

function Upper_Lower_Case(string $text = null, $type = 'l'){

    switch ($type) {
        case 'u':
            $text_type = 'uppercase';
            break;

            case 'l':
                $text_type = 'lowercase';
                break;
        
        default:
        $text_type = 'uppercase';
            break;
    }

    echo " <span style = 'text-transform: {$text_type};' > {$text} </span>";

}

















?>