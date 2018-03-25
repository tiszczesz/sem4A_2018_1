<?php

function Reverse($text) {
    $wynik = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $wynik .= $text[strlen($text) - 1 - $i];
    }
    return $wynik;
}
function Spray($text,$d){
    $words = explode(' ', $text);
    $wynik='';
    for($i=0;$i< count($words);$i++){
        $wynik .= SprayWord($words[$i], $d).' ';
    }
    return $wynik;
}
function SprayWord($text,$d){
    $wynik = '';
    for($i=0;$i<strlen($text);$i++){
        if($i< (strlen($text)-1)) {$wynik .= $text[$i].$d;} 
        else {$wynik .= $text[$i];}
    }
    return $wynik;
}




