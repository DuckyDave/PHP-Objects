<?php
    include "Employee.php";

    if($argc == 3) {
        $name = $argv[1];
        $salary = $argv[2];
        $employee1 = new Employee();
        print_r($employee1->initialize($name, $salary));
        $employee1->imprimir();
    } else {
        echo ("Per executar el programa has de indicar un nom i un salari separats per un espai en blanc" . "\n");
        echo ("Per exemple: php Exercici1.php Teresa 4700" . "\n");
    }
?>