<?php

/* intval — Retourne la valeur numérique entière équivalente d'une variable */

include 'strlen.php';

function fn_intval($var){
  /* création d'une variable dans laquel on va mettre les nombre entier */
    $intNum = "";
    /* création d'une variable dans laquelle on va mettre le prmeier chiffre après la virgule */
    $firstDecim = "";
    /* transformer la valeur chiffrer en string */
    $array = (string)$var;
    /* verif */
    if ($var != null){
      /* boucler dans la chaine */
      for ($i=0; $i < fn_strlen($array); $i++) {
        /* si il y as une virgule ou un point dans la chaine */
        if ($array[$i] == "." | $array[$i] == ","){
          /* mettre la valeur d'après dans la deuxième variable vide */
          $firstDecim = $array[$i+1];
          /* si la premiere décimale après la virgule est supérieur ou égal à 5 */
          if($firstDecim >= 5){
            /* incrémenter la première variable vide de 1 */
            $intNum ++;
          }
          /* stopper la boucle */
          break;
        }else{
          /* sinon retourner le resultat sans les valeurs après la virgule */
          $intNum .= $array[$i];
        }
      }
      
    } else {
        return 1;
    }
    /* retourner le resultat */
    return $intNum;
}

?>
