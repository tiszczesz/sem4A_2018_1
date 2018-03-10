<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 1</title>
    </head>
    <body>
        <h1>Ćwiczenie 1</h1>
        <pre>
        <?php
         echo "<p>Witaj świecie</p>\n";
         echo '<ol>'."\n";
         echo "\t".'<li>Element 1</li>'."\n";
         echo "\t<li>Element 2</li>\n";
         echo "\t<li>Element 3</li>\n";
         echo "</ol>\n";
         $a = 12;
         var_dump($a);
         $a = 34.89;
         var_dump($a);
         $a = "ala ma kota";
         var_dump($a);
         $a=true;
         var_dump($a);
         define("stala", 77);
         var_dump(stala);
         const stala2 = "ala ma kota";
         var_dump(stala2);
        // $c;
        // var_dump($c);
        ?>
        </pre>
    </body>
</html>
