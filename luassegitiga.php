<?php
    function luas_segitiga ($alas, $tinggi){
        return ($alas*$tinggi)/2;
    }
//pemanggil fungsi
$a=10;
$t=5;
echo "Luas segitiga $a * $t = ";
echo luas_segitiga($a, $t);
?>