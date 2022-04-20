<?php

include '../strlen.php';

/* explode — Scinde une chaîne de caractères en segments */

function fn_explode($ex, $var){
    
    /* création du tableau vide */
    $array = [];
    /* création de la variable string qui servira d'index */
    $index = "";
    /* boucler dans la chaine */
    for ($i=0; $i <= fn_strlen($var); $i++) {
        /* si le séparateur est détecter */
        if($var[$i] == $ex){
            /* alors mettre la chaine dans le premier index disponible du tableau */
            $array[] .= $index;
            /* vider la variable */
            $index = "";
        } else {
            /* sinon mettre les valeurs dans la chaine */
            $index .= $var[$i];
        }
        
    }
    /* mettre la chaine dans le tableau */
    $array[] = $index;
    /* retourner le tableau */
    return $array;
}


