<?php
class sekolah{
var $nama_sekolah ;
var $jumlah_murid ;
var $jumlah_ekskul ;
var $jumlah_guru;
function set_nama_sekolah($new_nama_sekolah){
	$this->nama_sekolah=$new_nama_sekolah;
}
function get_name(){
	return $this->nama_sekolah;
}
function set_jumlah_murid($new_jumlah_murid){
	$this->jumlah_murid=$new_jumlah_murid;
}
function get_jumlah_murid(){
	return $this->jumlah_murid;
}
function set_jumlah_ekskul($new_jumlah_ekskul){
	$this->jumlah_ekskul=$new_jumlah_ekskul;
}
function get_jumlah_ekskul(){
	return $this->jumlah_ekskul;
}
function set_jumlah_guru($new_jumlah_guru){
	$this->jumlah_guru=$new_jumlah_guru;
}
function get_jumlah_guru(){
	return $this->jumlah_guru;
}
}
$a = new sekolah();
  
// set property
$a->nama_sekolah="SMK Assalaam";
$a->jumlah_murid="41";
$a->jumlah_ekskul="15";
$a->jumlah_guru="50";
  
// tampilkan property
echo 'Nama Sekolah : '.$a->nama_sekolah;
echo "<br />";
echo 'Jumlah Murid : '.$a->jumlah_murid;
echo "<br />";
echo 'Jumlah Ekskul : '.$a->jumlah_ekskul;
echo "<br />";
echo 'Jumlah Guru : '.$a->jumlah_guru;
echo "<br />";
// tampilkan method
?>