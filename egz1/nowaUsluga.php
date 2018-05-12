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
            <h3>Dodaj nową usługę:</h3> 
            <form action="addNew.php" method="post">
                <fieldset>
                    <legend>Nowa usługa</legend>
                    <div class="line">
                        <label for="nazwa">Nazwa: </label>
                        <input type="text" id="nazwa" name="nazwa">
                    </div>
                    <div class="line">
                        <label for="cena">Cena: </label>
                        <input type="text" id="cena" name="cena">
                    </div>
                    <div class="line">
                        <input type="submit" value="Dodaj"/>
                    </div>
                </fieldset>
            </form>
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
                <a href="nowaUsluga.html">Dodaj nową usługę</a>
            </div>
        </section>       
    </body>
</html>
