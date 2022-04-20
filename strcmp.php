<?php
/* strcmp — Comparaison binaire de chaînes */
function fn_strcmp($str1, $str2){
    /* si la valeur est égal à la valeur comparer */
    if($str1 == $str2){
        /* retourne 0 */
        return 0;
    } else if($str1 < $str2){/* si la valeur est inférieur à la valeur comparer */
        return "<" . 0;/* retourner inférieur à 0 */
    } else if ($str1 > $str2) {/* si la valeur est suppérieur à la valeur comparer */
        return ">" . 0;/* retourner suppérieur à 0 */
    } else {/* sinon */
        return false;/* retourner un booléen faux */
    }
}