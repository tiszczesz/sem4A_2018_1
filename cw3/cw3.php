<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 3</title>
    </head>
    <body>
        <h1>Ćwiczenie 3</h1>
        <h3>Pętla for(...;...;...){...}</h3>
        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<h{$i}>Nagłówek nr {$i}</h{$i}>\n";
        }
        ?>
        <h3>Pętla while(...){...}</h3>
        <ol type="I">
            <?php
            $i = 0;
            while ($i++ <= 5) {
                echo "\t<li>Element listy</li>\n";
                if ($i % 2 == 0) {
                    $ilosc = rand(2, 6);
                    echo "\t<ol>\n";
                    for ($j = 0; $j < $ilosc; $j++) {
                        echo "\t\t<li>Element podlisty</li>\n";
                    }
                    echo "\t</ol>\n";
                }
            }
            ?>
        </ol>
        <h4>Lista checkbox i pętla while</h4>
        <?php
        $i = 0;
        while (++$i <= 5) {
            echo "<input type='checkbox' value='zaint{$i}'/>"
            . " Zainteresowanie nr {$i}<br>\n";
        }
        ?>
        <h3>Pętla do{...}while(...);</h3>
        <?php
        $licznik=0;
        $suma = 0;
        $min = PHP_INT_MAX;
        $max = -PHP_INT_MAX;
        do{
            $losowa = rand(-80, 80);
            if($losowa!=0) {
                $licznik++;
                $suma += $losowa;
                if($min>$losowa) {$min = $losowa;}
                if($max<$losowa) {$max = $losowa;}
            }
            echo $losowa.' ';
        }while ($losowa!=0);
        if($licznik>0){
            echo "<p>Ilość losowań: {$licznik}</p>\n";
            echo "<p>Wartość maksymalna: {$max}</p>\n";
            echo "<p>Wartość minimalna: {$min}</p>\n";
            echo "<p>Suma: {$suma}</p>\n";
            echo "<p>Średnia: ".round($suma/$licznik,2)."</p>\n";
        }else{
            echo "<p>Zbiór pusty</p>\n";
        }
        
        ?>
    </body>
</html>
