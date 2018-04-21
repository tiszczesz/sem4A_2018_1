<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <!--<pre>-->
            <?php
            $f = fopen('dane.txt', 'r');
            $line = fgets($f);
            while(($line=fgets($f))!=false){
                echo "<p>{$line}</p>\n";
            }
            
            fclose($f);
            ?>
        <h2>A teraz dopisujemy do pliku</h2>
        <?php
        $line = "Danuta|Małecka|2B".PHP_EOL;
        $f = fopen('dane.txt', 'a');
        fwrite($f, $line);
        fclose($f);
        ?>
        <!--</pre>-->
    </body>
</html>
