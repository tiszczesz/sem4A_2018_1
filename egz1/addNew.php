<?php
if(isset($_POST['nazwa'])){
    $nazwa = $_POST['nazwa'];
    $cena = floatval($_POST['cena']);
    if(trim($nazwa)!='' && $cena>0){
        //echo "bedzie robota z baza!!";
        $conn = new mysqli("localhost","root","","salon2018_4a");
        $conn->query("SET NAMES utf8");
        $sql = "INSERT INTO uslugi(nazwa,cena) "
                . "VALUES('{$nazwa}',{$cena})";
       $result = $conn->query($sql);
       header("Location: salon.php");
    }else{
        header("Location: nowaUsluga.php");
    }
}
