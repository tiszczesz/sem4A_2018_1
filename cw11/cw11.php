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
        <!--</pre>-->
    </body>
</html>
