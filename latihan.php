<?php
require_once 'penjumlahan.php';
$penjumlahan = new penjumlahan();
$penjumlahan -> set_penjumlahan(2,10);
echo "penjumlahan dari bilangan 2 dan 10 adalah".$penjumlahan->get_penjumlahan();
?>