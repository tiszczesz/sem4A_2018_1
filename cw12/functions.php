<?php

function toHtmlTable(array $dane) {
    $html = "<table>\n";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th>"
            . "<th>Semestr</th><th>Operacje</th></tr>\n";
    $lp = 0;
    foreach ($dane as $line) {
        $lp++;
        $html .= "<tr><td>{$lp}</td>\n"
                . "<td>{$line[0]}</td>\n"
                . "<td>{$line[1]}</td>\n"
                . "<td>{$line[2]}</td><td><a href='#'>Usuń</a></td></tr>\n";
    }
    return $html . "</table>\n";
}

function fromFileToArray($filename) {
    $f = fopen($filename, 'r');
    $dane = [];
    while (($line = fgets($f)) != false) {
        $dane[] = explode('|', trim($line));
    }
    fclose($f);
    return $dane;
}

function toList(array $dane) {
    $html = "<ol>\n";
    foreach ($dane as $line) {
        $html .= "<li>Dane słuchacza: ";
        $html .= "<ol type='a'><li>{$line[0]}</li><li>{$line[1]}</li>"
                . "<li>{$line[2]}</li></ol>\n</li>\n";
    }
    return $html . "</ol>\n";
}

function SaveToFile($filename, array $dane) {
    $f = fopen($filename, 'a');
    $line = $dane[0] . '|' . $dane[1] . '|' . $dane[2] . PHP_EOL;
    fwrite($f, $line);
    fclose($f);
}
