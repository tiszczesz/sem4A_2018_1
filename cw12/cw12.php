<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{border-collapse: collapse;}
            th{background-color: #006600; color: white;}
            td{background-color: white; color: #006600;}
            td,th{border: solid 1px black;}
        </style>
    </head>
    <body>
       
            <?php
            require_once 'functions.php';
            $dane = fromFileToArray('dane.txt');
            echo toHtmlTable($dane);
            echo toList($dane);
            //print_r($dane);
            ?>
        <div>
            <a href="dodaj.html">Dodaj nowego słuchacza</a>
        </div>
    </body>
</html>
