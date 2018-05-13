<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="salon.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="addNewAnimal.php" method="post">
            <fieldset>
                <legend>Nowy zwierzak</legend>
                <div class="line">
                    <label for="imie">Imie: </label>
                    <input type="text" id="imie" name="imie">
                    <span class="error"></span>
                </div>
                <div class="line">
                    <label for="wlasciciel">Właściciel: </label>
                    <input type="text" id="wlasciciel" name="wlasciciel">
                    <span class="error"></span>
                </div>
                <div class="line">
                    <label for="telefon">Telefon: </label>
                    <input type="text" id="telefon" name="telefon">
                    <span class="error"></span>
                </div>
                <div class="line">
                    <label for="rodzaj">Rodzaj: </label>
                    <select id="rodzaj" name="rodzaj">
                        <option value="1">Pies</option>
                        <option value="2">Kot</option>
                    </select>                       
                </div>
                <div class="line">
                    <label for="usluga">Usługa: </label>
                    <select id="usluga" name="usluga">
                        <?php
                        $conn = new mysqli("localhost", "root", "", "salon2018_4a");
                        $conn->query("SET NAMES utf8");
                        $sql = "SELECT id,nazwa,cena FROM uslugi";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            echo "\t<option value='{$row['id']}'>{$row['nazwa']} {$row['cena']}</option>\n";
                        }
                        $conn->close();
                        ?>
                    </select>                       
                </div>
                <div class="line">
                    <input type="submit" value="Dodaj zwierzaka"/>
                </div>
            </fieldset>
        </form>

    </body>
</html>
