<?php

function getConnection() {
    $conn = new mysqli('localhost', 'root', '', 'firma4a_2018_1');
    if ($conn->connect_errno) {
        echo "Error";
        echo $conn->connect_error;
        return false;
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}

function getAll($conn) {
    if (!$conn) {
        return [];
    }
    $dane = [];
    $sqlQuery = "SELECT * FROM pracownicy ORDER BY nazwisko";
    $result = $conn->query($sqlQuery);
    if (!$result) {
        return [];
    }
    while ($row = $result->fetch_array()) {
        $dane[] = $row;
    }
    return $dane;
}
function daneToTable(array $dane){
      $html = "<table>\n";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th>"
            . "<th>Pensja</th><th>Operacje</th></tr>\n";
    $lp = 0;
    foreach ($dane as $line) {
        $lp++;
        $html .= "<tr><td>{$lp}</td>\n"
                . "<td>{$line[1]}</td>\n"
                . "<td>{$line[2]}</td>\n"
                . "<td style='text-align:right'>{$line[3]}</td>"
                . "<td><a href='delete.php?id={$line[0]}'>Usuń</a></td></tr>\n";
    }
    return $html . "</table>\n";
}
function toSelect(array $dane){
    $html = "<select id='wybor' name='wybor'>\n";
    foreach ($dane as $line) {
        $html .= "<option value='{$line[0]}'> {$line[1]} {$line[2]}"
              . " {$line[3]} </option>\n";
    }
    return $html . "</select>\n";
}
function deleteUser($id=0){
    $conn = getConnection();
    if(!$conn) return ;
    $sqlQuery = "DELETE FROM pracownicy WHERE id={$id}";
    $conn->query($sqlQuery);
    $conn->close();
}
function addWorker($imie, $nazwisko, $pensja){
    $conn = getConnection();
    if(!$conn) return;
    $sqlQuery = "INSERT INTO pracownicy(imie,nazwisko,pensja) "
            . "values('{$imie}','{$nazwisko}',{$pensja})";
    $conn->query($sqlQuery);        
}
