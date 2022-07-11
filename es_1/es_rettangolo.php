<?php

class rettangolo {

    public $base;
    public $altezza;

    public function __construct($base, $altezza){
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function ridimensiona($base, $altezza){
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function perimetro(){
        return (($this->base+$this->altezza)*2);
    }

    public function area(){
        return ($this->base*$this->altezza);
    }

}

?>