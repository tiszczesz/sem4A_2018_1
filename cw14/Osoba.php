<?php
class Osoba{
    private $imie;
    private $nazwisko;
    private $semestr;
    
    public function __construct($imie,$nazwisko,$semestr) {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->semestr = $semestr;
    }
    public function __toString() {
        return "<p>{$this->imie} {$this->nazwisko}"
             . " {$this->semestr}</p>";
    }
}

