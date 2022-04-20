<?php
/* inclu le fichier strlen qui contien la function strlen */
include 'strlen.php';

function fn_count($items) {
    /* transforme le paramètre sinon sa bug je sais pas pourquoi */
    $str = $items;
    /* verif */
    if ($str != null) {
        /* execution de la function strlen parcequ'elle marche aussi sur les tableaux */
        fn_strlen($str);
    }
    /* retourne le résultat */
    return fn_strlen($str);
}
