<?php
    class Triangle extends Shape 
    {
        public function area() {
            $area = ($this->width * $this->height) / 2;
            echo ("L'area del triangle de base " . $this->width . " i altura " . $this->height . " es " . $area . "\n");
        }
    }
?>