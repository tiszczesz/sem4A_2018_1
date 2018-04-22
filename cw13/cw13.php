<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <style>
            table{border-collapse: collapse; width: 80%;}
            th{background-color: #006600; color: white;}
            td{background-color: white; color: #006600;}
            td,th{border: solid 1px black; padding: 5px;}
        </style>
    </head>
    <body>
        <?php
        require_once 'functions.php';
        $conn = getConnection();
        $dane = getAll($conn);
        echo daneToTable($dane);
        echo "<div>".toSelect($dane)."</div>\n";
        $conn->close();// mysqli_close($db);
        ?>
        <div>
            <a href="dodaj.html">Dodaj pracownika</a>
        </div>
    </body>
</html>
