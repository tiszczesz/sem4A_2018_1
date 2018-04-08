<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Tablice w php jako zbiór danych</h1>
        <pre>
            <?php
            $t1 = array(3, 8, 99, "ala ma kota", true, 45.9);
            print_r($t1);
            $t2 = [$t1, 34, 90, "ostatni"];
            // print_r($t2);
            // var_dump($t2);
            ?>
        </pre>
        <h1>Dodawanie do tablicy</h1>
        <pre>
            <?php
            $t1[] = "nowy element";
            print_r($t1);
            array_push($t1, "jeszcze nowszy");
            print_r($t1);
            $t1[10] = "element 10";
            print_r($t1);
            var_dump($t1);
            for ($i = 0; $i < count($t1); $i++) {
                echo $t1[$i] . " ";
            }
            echo "<br>";
            foreach ($t1 as $elem) {
                echo $elem . " ";
            }
            echo "<br>";
            ?>
        <h1>Usuwanie elementów z tablicy</h1>
            <?php
            unset($t1[2]);
            print_r($t1);
            $smiec = array_pop($t1);
            print_r($t1);
            echo $smiec;
            ?>
        <h1>Sortowanie tablic indeksowanych</h1>
        </pre>
    </body>
</html>
