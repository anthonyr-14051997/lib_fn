<?php

/* array_diff — Calcule la différence entre des tableaux */

include 'strlen.php';

function fn_array_diff($var, $var2){
    
    /* boucle dans la première chaine / tableau */
    for ($i=0; $i < fn_strlen($var); $i++) {
        
        /* boucle dans la deuxième */
        for ($i=0; $i < fn_strlen($var2); $i++) {

            /* création d'une variable dans laquelle on va mettre les valeurs pour les comparer */
            $diff = "";
            /* stocker les valeurs */
            $diff .= $var[$i];

            /* comparer */
            if ($diff != $var2[$i]) {
                /* retourner la différence */
                return $var2[$i];
            }
        }
    }
    
}

