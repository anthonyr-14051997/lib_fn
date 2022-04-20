<?php

/* str_replace — Remplace toutes les occurrences dans une chaîne */

function fn_str_replace($replace, $new, $str){
    // valeurs à remplacer
    $replace_pairs = array($replace => $new);
    // boucle pour selectionner les valeurs si il y en as plusieurs
    foreach($replace_pairs as $replace => $new)
    {
        // if une fois les valeurs selectionner
        if(strpos($str, $replace)) {
            // remplacer les anciennes valeurs par les nouvelles
            $str = implode($new, explode($replace, $str));
            // retourner la nouvelle chaine de caractère
            return $str;
        }
    }
}

