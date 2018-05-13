<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Salon pielęgnacji</title>
        <link href="salon.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section id="baner"><h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1></section>
        <section id="lewy">
            <h3>   SALON ZAPRASZA W DNIACH     </h3>
            <ul>
                <li>Poniedziałek, 12:00 - 18:00</li>
                <li>Wtorek, 12:00 - 18:00</li>
            </ul>
            <a href="pies.jpg"><img src="pies_mini.jpg" alt="pies"></a>
            <p>Umów się telefonicznie na wizytę lub po prostu przyjdź!</p>
        </section>
        <section id="srodkowy">
            <h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3> 
            <?php
            $conn = new mysqli("localhost", "root", "", "salon2018_4a");
            //var_dump($conn);
            $conn->query("SET NAMES utf8");
            $sql = "SELECT imie,rodzaj,nastepna_wizyta,telefon FROM zwierzeta"
                    . " where nastepna_wizyta <>0 ";
            $result = $conn->query($sql);
            //var_dump($result);
            while ($row = $result->fetch_assoc()) {
                //print_r($row);
                $rodzaj = "";
                if ($row['rodzaj'] == '1')
                    $rodzaj = "Pies:";
                if ($row['rodzaj'] == '2')
                    $rodzaj = "Kot:";
                echo "<p>{$rodzaj} {$row['imie']}</p>";
                echo "<p>Data następnej wizyty: {$row['nastepna_wizyta']} "
                . "telefon właściciela: {$row['telefon']}</p>";
            }
            $conn->close();
            ?>
            <div>
                <a href="addAnimal.php">Dodaj nowego zwierzaka</a>
            </div>
        </section>
        <section id="prawy">
            <h3>USŁUGI </h3> 
            <?php
            $conn = new mysqli("localhost", "root", "", "salon2018_4a");
            //var_dump($conn);
            $conn->query("SET NAMES utf8");
            $sql = "SELECT nazwa,cena FROM uslugi";
            $result = $conn->query($sql);
             while ($row = $result->fetch_assoc()) {                
                echo "<p>{$row['nazwa']} {$row['cena']}</p>";                
            }
            $sql2 = "SELECT MIN(cena) FROM uslugi";
            $result = $conn->query($sql2);
            $min = $result->fetch_row();
            //var_dump($min);
            echo "<p style='font-weight:bold'>Ceny już od: {$min[0]}</p>";
            $conn->close();
            
            ?>
            <div>
                <a href="nowaUsluga.php">Dodaj nową usługę</a>
            </div>
        </section>       
    </body>
</html>
