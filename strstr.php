<?php

/* strstr — Trouve la première occurrence dans une chaîne */

include 'strlen.php';

function fn_strstr($arr1, $arr2){
    /* création de la variable dans laquel on va mettre l'occurence */
    $res = "";
    /* boucle dans la première variable */
    for ($i=0; $i < fn_strlen($arr1); $i++) {
        /* boucle dans la deuxième variable */
        for ($i=0; $i < fn_strlen($arr2); $i++) {
            /* comparer les deux */ 
            if ($arr1[$i] == $arr2[$i]) {
                /* mettre le resultat dans la variable vide */
              $res .= $arr2[$i];
            }
        }
    } 
    /* retourner la variable contenant l'occurence */
    return $res;
}