<?php
include 'strlen.php';

/* sort — Trie un tableau en ordre croissant */

/* declaration de la function */
function fn_sort($tab){
    /* initialisation de la variable en booléen */
    $changed = false;
    do{
        $changed = false;
        /* boucler sur les valeurs du tableau */
        for($i=0; $i < fn_strlen($tab)-1; $i++) {
            /* si la valeur est suppérieur la valeur suivante */
            if($tab[$i] > $tab[$i+1]) {
                /* mettre la valeur dans une variable */
                $tmp = $tab[$i];
                /* la valeur est égal à la valeur suivante */
                $tab[$i] = $tab[$i+1];
                /* la valeur suivante est égal à la valeur stocker */
                $tab[$i+1] = $tmp;
                /* alor initialisé le booléen à vrai */
                $changed = true;
            }
        }
    } while($changed);
    /* retourner le tableau */
    return $tab;
    
}