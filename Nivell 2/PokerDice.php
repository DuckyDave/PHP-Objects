<?php
class PokerDice {
    //tirem el dau, nombre aleatori entre 1 i 6
    public function throw() {
        $num = mt_rand(1, 6);
        return $num;
    }
    
    //figura que correspon a la cara del dau en cada tirada
    public function shapeName($num) {
        $diceSides = array('1' => "As", '2' => "K", '3' => "Q", '4' => "J", '5' => "7", '6' => "8");
        return ($diceSides[$num]. " ");
    }

    //nombre total de tirades entre tots els daus
    function getTotalThrows($number) {
        return ("Has tirat els daus " . $number . " vegades" . "\n");
    }
}
?>