<?php
    class Rectangle extends Shape {
        public function area() {
            $area = $this->width * $this->height;
            echo ("L'area del rectangle de base " . $this->width . " i altura " . $this->height . " es " . $area . "\n");
        }
    }
?>