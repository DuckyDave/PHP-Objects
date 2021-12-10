<?php
    abstract class Shape {
        //Atributs
        public $width;
        public $height;
        //Constructor
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
        //Metode
        public abstract function area();
    }
?>