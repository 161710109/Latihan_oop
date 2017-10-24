<!DOCTYPE html>
<html>
<body>
<body bgcolor="swallalala">
<?php
require_once 'latsol.php';

$bio = new biodata ('Ferdiansyah Akbar Fauzi','Bandung','XI RPL 1','Lajang');
echo"<br />";
echo"nama saya  :".$bio->get_nama();
echo"<br />";
echo"saya lahir di :".$bio->get_tempat();
echo"<br />";
echo"saya kelas  :".$bio->get_kelas();
echo"<br />";
echo"status saya :".$bio->get_status();
echo"<br />";
?>