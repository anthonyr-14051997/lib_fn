<?php
/* strlen — Calcule la taille d'une chaîne */
function fn_strlen($str){
    /* verif */
    if ($str != null) {
        /* incrémentation de $i à 0 */
        $i=0;
        /* boucle du moment que le champ n'est pas vide */
        while ($str[$i] != '') {
            /* incrémente $i à chaque réitération de la boucle */
          $i++;
        }
        /* retourne la valeur */
        return $i;
    }
}