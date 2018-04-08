<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="tekst"/>
            <input type="submit" value="Sprawdź"/>
        </form>
        <?php
        require_once 'functions.php';
        var_dump($_POST);
        if (isset($_POST['tekst'])) {
            $tekst = $_POST['tekst'];
            echo "<p>{$tekst}</p>\n";
            echo "<p>Ilość znaków: " . strlen($tekst) . "</p>\n";
            echo "<p>Ilość liter: " . LiteryRegEx($tekst) . "</p>\n";
            echo "<p>Ilość samogłosek: " . SamogloskiRegEx($tekst) . "</p>\n";
        }
        ?>
    </body>
</html>
