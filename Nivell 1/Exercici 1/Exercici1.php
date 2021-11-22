<?php
    include "Employee.php";

    if($argc == 3) {
        $name = $argv[1];
        $salary = $argv[2];
        $employee1 = new Employee();
        print_r($employee1->initialize("Anna",6500));
        $employee1->imprimir();
    } else {
        echo ("Per executat el programa has de indicar un nom i un salari separats per un espai" . "\n");
    }
?>