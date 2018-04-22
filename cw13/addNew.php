<?php
require_once 'functions.php';
if(isset($_POST['imie'])){
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $pensja = floatval($_POST['pensja']);
    if($imie!='' && $nazwisko!='' && $pensja>0){
        addWorker($imie,$nazwisko,$pensja);
        header('Location: cw13.php');
    }else{
        header('Location: dodaj.html');
    }
}

