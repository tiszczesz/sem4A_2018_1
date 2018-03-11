<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //include   include_once
        require_once 'functions.php';
        $text = 'Ala ma kota';        
        echo Reverse($text);
        echo "<br>";
        echo fun2($text,'-'); // A-l-a m-a k-o-t-a
      //  print_r(explode('', $text));
        ?>
    </body>
</html>
