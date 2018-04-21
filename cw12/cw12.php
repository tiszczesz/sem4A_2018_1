<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
            <?php
            require_once 'functions.php';
            $dane = fromFileToArray('dane.txt');
            echo toHtmlTable($dane);
            //print_r($dane);
            ?>
       
    </body>
</html>
