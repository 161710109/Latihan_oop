<?php

require_once 'soal.php';
$mtk = new matematika;
$mtk -> set_penjumlahan(10,10);
$mtk -> set_pengurangan(20,10);
$mtk -> set_perkalian(10,5);
$mtk -> set_pembagian(20,4);
echo"<br>";
echo"penjumlahan :".$mtk->get_penjumlahan();
echo"<br>";
echo"pengurangan :".$mtk->get_pengurangan();
echo"<br>";
echo"perkalian :".$mtk->get_perkalian();
echo"<br>";
echo"pembagian :".$mtk->get_pembagian();
echo"<br>";
?>