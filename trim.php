<?php

/* trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne */

include 'strlen.php';

function fn_trim($str, $cara=false) {

    /* si il n'y as rien en deuxième paramètre supprime les espaces */
    if ($cara == null){
        $cara = " ";
    }
    /* initialiser un booléen */
    $doneTrimming = false;
    /* créer une variable vide */
    $ret = "";
    /* boucler dans la chaine pour trouver les espaces en partant de la gauche */
    for ($index = 0; $index < fn_strlen($str); $index++) {
        /* si il y as un espace */
        if($str[$index] !== $cara){
            /* initialiser le booléen à vrai */
            $doneTrimming = true;
        }
        /* si le booléen est vrai */
        if($doneTrimming){
            /* ajouter le resultat sans les espaces de gauche dans la variable vide */
            $ret .= $str[$index];
        }
    }
    /* initialiser un deuxième booléen */
    $doneTrimming2 = false;
    /* création d'une deuxième variable vide */
    $ret2 = "";
    /* boucler dans le resultat précédent dans le sens inverse */
    for ($index = fn_strlen($ret)-1; $index > -1; $index--) {
        /* si il y as un espace initialiser le deuxième booléen à vrai */
        if($ret[$index] !== $cara){
            $doneTrimming2 = true;
        }
        /* si le deuxième booléen est vrai */
        if($doneTrimming2){
            /* mettre le resultat dans la deuxième variable vide */
            $ret2 .= $ret[$index];
        }
    }
    /* création d'une troisième et dernière variable vide pour mettre le résultat dans le bon ordre */
    $ret3 = "";
    /* boucler dans la deuxième variable */
    for ($index = fn_strlen($ret2)-1; $index > -1; $index--) {
        /* mettre le resultat dans le bon ordre dans la dernière variable vide */
        $ret3 .= $ret2[$index];
    }
    /* afficher la dernière variable vide */
    return $ret3;
}
