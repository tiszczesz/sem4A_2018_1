<?php
if(isset($_GET['id'])){
    require_once 'functions.php';
    $id = intval($_GET['id']);
    deleteUser($id);
    header('Location: cw13.php');
}


