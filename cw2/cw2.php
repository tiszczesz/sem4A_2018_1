<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Ćwiczenie 2</h1>
        <?php
        $a = 34.9;
        $b = 0.9;
        echo '<p>'.$a.' + ('.$b.') = '.($a+$b).'</p>'."\n";
        echo "<p>{$a} - ({$b}) = ".($a-$b)."</p>\n";
        echo "<p>{$a} * ({$b}) = ".($a*$b)."</p>\n";
        //$wynik = $b!=0 ? $a/$b : "BRAK WYNIKU";
        if($b!=0) {
            $wynik = $a/$b;
        }else{
            $wynik = "BRAK WYNIKU";
        }
        echo "<p>{$a} / ({$b}) = ".round($wynik,3)."</p>\n";
        echo <<<TEXT
       <select>
            <option>sfsfs</option>
            <option>sfsfs</option>
            <option>sfsfs</option>
        </select>        
TEXT;
        ?>
    </body>
</html>
