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
       for($i=1;$i<=6;$i++){
           echo "<h{$i}>Nagłówek nr {$i}</h{$i}>\n";
       }
        ?>
        <h3>Pętla while(...){...}</h3>
        <ol type="I">
        <?php
        $i=0;
        while($i++<=5){
            echo "\t<li>Element listy</li>\n";
            if($i%2==0){
                $ilosc = rand(2,6);
                echo "\t<ol>\n";
                for($j=0;$j<$ilosc;$j++){
                    echo "\t\t<li>Element podlisty</li>\n";
                }
                echo "\t</ol>\n";
            }
        }        
        ?>
        </ol>
    </body>
</html>
