<?php
    include "Shape.php";
    include "Triangle.php";
    include "Rectangle.php";
    // segons l'enunciat, definim dos objectes, un triangle i un rectangle i truquem al mètode area de cadascun.
    if($argc == 4) {
        $width = $argv[2];
        $height = $argv[3];
        //si la persona usuària introduieix una lletra en majúscula, la convertim a minúscula
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
        echo ("Per calcular l'area d'una figura has d'introduir 't' (triangle) o 'r' (rectangle), el seu ample i la seva altura, separats per un espai en blanc. " . "\n");
        echo ("Per exemple: php \"Nivell 1/Exercici2.php\" t 35 78". "\n");
        echo ("Per exemple: php \"Nivell 1/Exercici2.php\" r 12 39". "\n");
    }
?>