<?php
    error_reporting(E_ALL);
    include 'PokerDice.php';

     //nombre total de tirades entre tots els daus
     function getTotalThrows($dice1, $dice2, $dice3, $dice4, $dice5) {
        printf("Resultat de la tirada dels 5 daus alhora" . "\n");
        print_r($dice1->shapeName($dice1->throw()));
        print_r($dice2->shapeName($dice2->throw()));
        print_r($dice3->shapeName($dice3->throw()));
        print_r($dice4->shapeName($dice4->throw()));
        print_r($dice5->shapeName($dice5->throw()));
        print_r("\n");
        
    }

     // generem els 5 daus
     $dice1 = new PokerDice;
     $dice2 = new PokerDice;
     $dice3 = new PokerDice;
     $dice4 = new PokerDice;
     $dice5 = new PokerDice;

    if($argc == 1) {
        //els tirem
       getTotalThrows($dice1, $dice2, $dice3, $dice4, $dice5);
    } else {
        printf ("Per executar el programa has d'introduir: php \"Nivell 2/Exercici1.php\"" . "\n");
    }
?>