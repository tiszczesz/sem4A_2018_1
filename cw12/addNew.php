<?php
require_once 'functions.php';
if(isset($_POST['imie'])){
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $semestr = trim($_POST['semestr']);
    if($imie=='' || $nazwisko=='' || $semestr==''){
        header('Location: dodaj.html');
    }else{
        SaveToFile('dane.txt',[$imie,$nazwisko,$semestr]);
        header('Location: cw12.php');
    }
}

