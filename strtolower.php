<?php

/* strtolower — Renvoie une chaîne en minuscules */

include 'strlen.php';

function fn_strtolower($my_str){
    /* création d'une variable vide */
    $temp_str = "";
    /* boucler dans la chaine */
    for ($i = 0; $i < fn_strlen($my_str); $i++) {
        /* transfomer la chaine en un octet */
        $char_code = ord($my_str[$i]);
        /* verifier quel valeur sont en majuscules */
        if ($char_code > 64 && $char_code < 92) {
            /* remplacer les majuscules par les minuscules */
            $temp_str = $temp_str . chr($char_code + 32);
        } else {
            /* laisser les majuscules en majuscules */
            $temp_str = $temp_str . $my_str[$i];
        }
    }
    /* placer les majuscules transformer dans la chaine */
    $my_str = $temp_str;
    /* retourner la chaine */
    return "$my_str\n";
}

?>