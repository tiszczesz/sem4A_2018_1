<?php

function toHtmlTable(array $dane) {
    $html = "<table>\n";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th>"
            . "<th>Semestr</th></tr>\n";
    $lp = 0;
    foreach ($dane as $line) {
        $lp++;
        $html .= "<tr><td>{$lp}</td>\n"
                . "<td>{$line[0]}</td>\n"
                . "<td>{$line[1]}</td>\n"
                . "<td>{$line[2]}</td></tr>\n";
    }
    return $html."</table>\n";
}
function fromFileToArray($filename){
    $f = fopen($filename, 'r');
    $dane = [];
    while(($line=fgets($f))!=false){
        $dane[]= explode('|', trim($line));
    }
    fclose($f);
    return $dane;
}
function toList(array $dane){
    $html = "<ol>\n";
    
    return $html."</ol>\n";
}