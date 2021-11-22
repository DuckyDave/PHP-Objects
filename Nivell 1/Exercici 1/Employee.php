<?php
    class Employee {
        //Atributs de la classe
        private $name;
        private $salary;
        //Constructor de la classe
        public function initialize($name, $salary) {
            $this->name = $name;
            $this->salary = $salary; 
        }
        //Metodes de la classe
        public function imprimir() {
            if($this->salary > 6000) {
                echo ($this->name . " ha de pagar impostos" . "\n");
            } else {
                echo ($this->name . " no ha de pagar impostos" . "\n");
            }
        }
    }
?>