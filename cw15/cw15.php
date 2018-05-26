<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="wynik.php" method="post">
            <div class="line">
                <label for="imie">Imię: </label>
                <input type="text" name="imie" id="imie"/>
                <span class="error"></span>
            </div>
             <div class="line">
                <label for="imie">Nazwisko: </label>
                <input type="text" name="nazwisko" id="nazwisko"/>
                <span class="error"></span>
            </div>
            <div class="line">
                <label>Semestr: </label>
            <?php
            require_once 'functions.php';
            $dane = getSemestry();
            echo semToSelect("semestr", $dane);
            ?>
            </div>
        </form>
    </body>
</html>
