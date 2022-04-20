<?php

function fn_strtolower($my_str){
    $temp_str = "";
    for ($i = 0; $i < strlen($my_str); $i++) {
        $char_code = ord($my_str[$i]);
        if ($char_code > 64 && $char_code < 92) {
            $temp_str = $temp_str . chr($char_code + 32);
        } else {
            $temp_str = $temp_str . $my_str[$i];
        }
    }
    $my_str = $temp_str;
    return "$my_str\n";
}

?>