<?php
    include "Shape.php";
    include "Triangle.php";
    include "Rectangle.php";

    $triangle1 = new Triangle(15, 20);
    print_r($triangle1->area());
    $rectangle1 = new Rectangle(45, 58);
    print_r($rectangle1->area());
?>