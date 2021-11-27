<?php
    error_reporting(E_ALL);
    include 'PokerDice.php';
    if($argc == 2) {
        $totalThrows = $argv[1];
        for ($i = 1; $i <= $totalThrows; $i++) {
        //generem els 5 daus i els tirem tots alhora
            for ($j = 1; $j <= 5; $j++) {
                $dice = new PokerDice();
                printf ($dice->shapeName($dice->throw()));
            }
            printf ("\n");
        }
        //mostra el nombre total de vegades que tires els 5 daus alhora
        printf ($dice->getTotalThrows($totalThrows));
    } else {
        printf ("Per executar el programa has d'introduir quantes vegades vols tirar tots els daus alhora" . "\n");
        printf ("Per exemple: php Exercici1.php 5" . "\n");
    }
?>