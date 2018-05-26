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
}

