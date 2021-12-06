<?php
    abstract class Shape {
        //Atributs
        public $width;
        public $height;
        //constructor
        public function Shape($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
        //metode
        public abstract function area();
    }
?>