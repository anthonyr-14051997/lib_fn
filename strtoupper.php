<?php

include 'strlen.php';

/* strtolower — Renvoie une chaîne en minuscules */

function fn_strtoupper($my_str){
    //création d'une variable vide pour stocker nos caractère
    $temp_str = "";
    for ($i = 0; $i < fn_strlen($my_str); $i++) {//création d'une boucle dans la chaine
        $char_code = ord($my_str[$i]);//transformer la chaine en un octet
        if ($char_code > 64 && $char_code < 92) {//verifier quel valeur sont en minuscule
            $temp_str = $temp_str . chr($char_code + 32);//remplacer les minuscule par les majuscule
        } else {
            $temp_str = $temp_str . $my_str[$i];//laisser les minuscule en minuscule
        }
    }
    $my_str = $temp_str;//placer les minuscules transformer dans la chaine
    return "$my_str\n";//retourner la chaine
}

?>