<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            label{display: inline-block; width: 150px;text-align: right;}
            .line{margin: 10px;}
            .error{color:red;}
        </style>
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
                <div class="line">
                    <label> </label>
                    <input type="submit" value="Dodaj"/>
                </div>
            </div>
        </form>
    </body>
</html>
