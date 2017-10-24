<?php

class rumah{
	public $tembok;
	public $pintu;
	public $jendela;
public function _construct ($tembok,$pintu,$jendela)
{
$this->tembok=$tembok;
$this->pintu=$pintu;
$this->jendela=$jendela;
}
public function set_tembok($tembok){
$this->tembok=$tembok;
}
public function get_tembok(){
 return $this->tembok;
}
public function set_pintu($pintu){
return $this->pintu=$pintu;
}
public function get_pintu(){
 return $this->pintu;
}
public function set_jendela($jendela){
	return $this->jendela=$jendela;
}
public function get_jendela(){
	return $this->jendela;
}

}
  require_once 'rumah.php';

 $tembok=new rumah('merah');
 $pintu=new rumah('putih');
  $jendela=new rumah('kotak');
echo"warna tembok:".$tembok->tembok.'<br>';
echo"warna pintu :".$pintu->pintu.'<br>';
echo"jenis jendela:".$jendela->jendela.'<br>';

?>