<?php
    //codi amb gestió de missatges d'error
    error_reporting(E_ALL);
    include "Shape.php";
    include "Triangle.php";
    include "Rectangle.php";

    function main(int $argc, array $argv) {
        if($argc < 4) {
            throw new Exception("Per calcular l'area d'una figura has d'introduir 't' (triangle) o 'r' (rectangle), el seu ample i la seva altura, separats per un espai en blanc." . "\n" . "Per exemple: php \"Nivell 1/Exercici2.php\" t 35 78" . "\n" . "Per exemple: php \"Nivell 1/Exercici2.php\" r 12 39" . "\n");
        } else if ($argc == 4) {
            if($argv[2] && $argv[3]) {
                if($argv[2] <= 0 || $argv[3] <= 0) {
                    throw new Exception("L'ample i/o l'altura de la figura ha(n) de ser major(s) que zero" . "\n");
                } else if($argv[2] > 0 && $argv[3] > 0) {
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
                }
            }
        }
    }

    //provem el codi
    try {
        main($argc, $argv);
    } catch (Exception $ex) {
        echo "Atenció:". " \n" . $ex->getMessage();
    }
?>