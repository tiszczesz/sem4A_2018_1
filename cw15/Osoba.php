<?php
class Osoba{
    private $id;
    private $imie;
    private $nazwisko;
    private $semestr;
    
    public function __construct($id,$imie,$nazwisko,$semestr) {
        $this->id = $id;
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->semestr = $semestr;
    }
    public function __toString() {
        return "<p>{$this->imie} {$this->nazwisko}"
             . " {$this->semestr}</p>";
    }
    function getId() {
        return $this->id;
    }

    function getImie() {
        return $this->imie;
    }

    function getNazwisko() {
        return $this->nazwisko;
    }

    function getSemestr() {
        return $this->semestr;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setImie($imie) {
        $this->imie = $imie;
    }

    function setNazwisko($nazwisko) {
        $this->nazwisko = $nazwisko;
    }

    function setSemestr($semestr) {
        $this->semestr = $semestr;
    }


}

