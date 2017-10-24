<?php

class sekolah{
	public $kelas;
	public $ekskul;
	public $murid;
	public $guru;
public function _construct ($kelas,$ekskul,$murid,$guru)
{
$this->kelas=$kelas;
$this->ekskul=$ekskul;
$this->murid=$murid;
$this->guru=$guru;
}
public function set_kelas($kelas){
$this->kelas=$kelas;
}
public function get_kelas(){
 return $this->kelas;
}
public function set_ekskul($ekskul){
return $this->ekskul=$ekskul;
}
public function get_ekskul(){
 return $this->ekskul;
}
public function set_murid($murid){
	return $this->murid=$murid;
}
public function get_murid(){
	return $this->murid;
}
public function set_guru($guru){
	return $this->guru=$guru;
}
public function get_guru(){
	return $this->guru;
}

}
  require_once 'sekolah.php';

 $kelas=new sekolah('5');
 $ekskul=new sekolah('15');
 $murid=new sekolah('41');
 $guru=new sekolah('25');
echo "jumlah kelas:".$kelas->kelas.'<br>';
echo "jumlah ekskul:".$ekskul->ekskul.'<br>';
echo "jumlah murid:".$murid->murid.'<br>';
echo "jumlah guru:".$guru->guru.'<br>';
?>