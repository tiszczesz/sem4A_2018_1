<?php

class Semestr {
    private $id;
    private $nazwa;
    function __construct($id, $nazwa) {
        $this->id = $id;
        $this->nazwa = $nazwa;
    }
    function getId() {
        return $this->id;
    }

    function getNazwa() {
        return $this->nazwa;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNazwa($nazwa) {
        $this->nazwa = $nazwa;
    }


}
