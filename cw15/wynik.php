<?php
require_once 'functions.php';
require_once 'Osoba.php';
if(isset($_POST['imie'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $semestr = $_POST['semestr'];
    if(trim($imie)!='' && trim($nazwisko)!='' && intval($semestr)>0){
        $s1 = new Osoba(-1, $imie, $nazwisko, $semestr);
        saveOsoba($s1);
        echo "OK";
    }else{
        echo "ERROR";
    }
}
