<?php
    include "Shape.php";
    include "Triangle.php";
    include "Rectangle.php";

  
    if($argc == 4) {
        $width = $argv[2];
        $height = $argv[3];
        //si la persona usuària introduieix un lletra en majúscula, la convertim a minúscula
        switch (strtolower($argv[1])) {
            case ('t'):
                $triangle1 = new Triangle($width, $height);
                print_r($triangle1->area());
                break;
            case ('r'):
                $rectangle1 = new Rectangle($width, $height);
                print_r($rectangle1->area());
                break;
            }
    } else {
        echo ("Per calcular l'area de una figura has d'introduir t (triangle) o r (rectangle)," . "\n");
        echo ("el seu ample i el seu alt, separats per un espai en blanc" . "\n");
        echo ("Per exemple: php Exercici2.php t 15 25". "\n");
    }
?>