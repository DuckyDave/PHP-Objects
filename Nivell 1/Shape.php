<?php
    abstract class Shape {
        public function Shape($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public abstract function area();
    }
?>