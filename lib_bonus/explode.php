<?php

/* explode — Scinde une chaîne de caractères en segments */

function fn_explode($ex, $var){
    $array = "";
    for ($i=0; $i < strlen($var); $i++) { 
        if($var[$i] == $ex){
            $array .= $var[$i-1];
        }
    }
    return $array;
}

$tab = "coucou: sa: va: et: toi";

echo fn_explode(":", $tab);
