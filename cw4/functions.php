<?php

function Reverse($text) {
    $wynik = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $wynik .= $text[strlen($text) - 1 - $i];
    }
    return $wynik;
}
function fun2($text,$d){
    $words = explode(' ', $text);
    $wynik='';
    for($i=0;$i< count($words);$i++){
        $wynik .= fun3($words[$i], $d).' ';
    }
    return $wynik;
}
function fun3($text,$d){
    $wynik = '';
    for($i=0;$i<strlen($text);$i++){
        if($i< (strlen($text)-1)) {$wynik .= $text[$i].$d;} 
        else {$wynik .= $text[$i];}
    }
    return $wynik;
}




