<?php

include '../strlen.php';

/* implode — Rassemble les éléments d'un tableau en une chaîne */

function fn_implode($tab){
    /* créeation d'une variable vide */
    $str = "";
    /* boucler dans le tableau */
    for ($i=0; $i < fn_strlen($tab); $i++) {
        /* metre les index dans la chaine */ 
        $str .= $tab[$i].",";
    }
    /* retourner la chaine */
    return $str;
}