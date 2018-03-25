<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'functions.php';
        if(isset($_POST['a']) && isset($_POST['b'])){
            $a = intval($_POST['a']);
            $b = intval($_POST['b']);
            if($a>0 && $b>0){
                echo "<p>bedziemy liczyć NWD dla {$a} i {$b}</p>\n";
                $wynik = NWDIter($a, $b);
                echo "<p>NWD({$a},{$b})={$wynik}</p>\n";
                echo "<p>NWD({$a},{$b})=".NWDRec($a, $b)."</p>\n";
            }else{
                echo "<p>nie bedziemy liczyć NWD dla {$a} i {$b}</p>\n";
            }
        }else{
            echo "brak pełnych danych";
        }
        ?>
    </body>
</html>
