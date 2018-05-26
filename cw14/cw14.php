<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 14 - klasy w php</title>
    </head>
    <body>
        <h1>Ćwiczenie 14 - klasy w php</h1>
        
        <?php
         require_once 'Osoba.php';
          class Film{
              private $tytul;
              private $rezyser;
              private $czas;
              public function SetAll($tytul = "noname",
                      $rezyser="noname",$czas = 0){
                  $this->tytul = $tytul;
                  $this->rezyser = $rezyser;
                  $this->czas = $czas;
              }
              public function Info(){
                  return "<p style='border: solid 1px black;padding:10px;'>"
                  . "Informacje o filmie:"
                  . "<br>Tytuł: {$this->tytul}<br>"
                  . "Reżyser: {$this->rezyser}<br>"
                  . "Czas trwania: {$this->czas}</p>";
              }
              public function SetCzas($czas){
                  $this->czas = $czas<0 ? -$czas : $czas;
              }
          }  
          $f1 = new Film();
          $f1->SetAll("Titanic", "Ksawery Rowery", 220);
          //var_dump($f1);
          echo $f1->Info();
          $f1->SetCzas(-330);
          echo $f1->Info();
          $o1 = new Osoba("Adam", "Nowak", "4B");
          echo $o1;
        ?>
        
    </body>
</html>
