<?php
require_once 'Semestr.php';
function getConnection(){
    $conn = new mysqli("localhost","root","","sluchacze2018");
    if($conn->connect_errno!=0){
        echo "ERROR: ".$conn->connect_error;
        return null;
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getSemestry(){
    $conn = getConnection();
    if($conn==null)      {  return [];}
    $sql = "SELECT * FROM semestry";
    $semestry = [];
    $result = $conn->query($sql);
    if($result){
        while ($row = $result->fetch_array()) {
            $semestry[] = new Semestr($row[0],$row[1]);
        }
    }
    return $semestry;
}
function semToSelect($nazwa,array $dane){
    $html = "<select name='{$nazwa}' id='{$nazwa}'>";
    foreach ($dane as $row) {
        $html .= "<option value='{$row->getId()}'>{$row->getNazwa()}</option>\n";
    }
    return $html."</select>";
}


