<?php
require_once 'functions.php';
if(isset($_POST['imie'])){
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $semestr = trim($_POST['semestr']);
    if($imie=='' || $nazwisko=='' || $semestr==''){
        echo "error";
    }else{
        SaveToFile('dane.txt',[$imie,$nazwisko,$semestr]);
        echo "przekierowanie do strony cw12.php";
    }
}

