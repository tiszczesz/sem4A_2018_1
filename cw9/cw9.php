<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Tablice asocjacyjne</h1>
        
        <?php
        $as1 = ["imie"=>"Jan","nazwisko"=>"Nowak",
            "wiek"=>34,"zainteresowania"=>["sport","muzyka","inne"]];
        //print_r($as1);
        echo "<div>imię: {$as1["imie"]} nazwisko: {$as1["nazwisko"]}"
             . " wiek: {$as1["wiek"]}</div>\n";
        echo "<ul>Zainteresowania:\n";
        foreach ($as1["zainteresowania"] as $item) {
            echo "<li>{$item}</li>\n";
        }
        echo "</ul>\n";       
        unset($as1["zainteresowania"]);
        $as1["plec"]="M";
        foreach ($as1 as $key => $value) {
           echo "<p> klucz: {$key} wartość: {$value}</p>\n";
        }
        asort($as1);
        echo "<pre>";
        print_r($as1);
        echo "</pre>";
        ?>
        
    </body>
</html>
