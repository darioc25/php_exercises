<?php

class Lampadina {

    public $on = false;
    public $broken = false;
    private $activations;
    private $counter = 0;

    public function __construct($activations) {
        $this->activations = $activations;
    }

    public function click() {
        $this->counter++;
        if($this->counter < $this->activations) {
            if($this->on != true) {
                $this->on = true;
            } else {
                $this->on = false;
            }
        } else {
            $this->broken = true;
        }
    }

    public function state() {
        if($this->broken != true) {
            if($this->on == true) {
                echo "The light bulb is on.";
            } else {
                echo "The light bulb is off.";
            }
        } else {
            echo "The light bulb is broken!";
        }
    }

}

?>