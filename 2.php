<?php 
class Mobil{
    
       /*ini properties*/
        public $roda = 4;
  public $kecepatan = 0;
  public $warna = 'putih'; 
  public $gigi = 0; //gigi normal
  
  /*creating methods*/  
  public function tancapGas($p=0){ //method sperti bisa dibilang jg Setter
    
        $this->kecepatan = $this->kecepatan + $p; //kecepatan bertambah
  }
  
  public function ngeRem($q=0){
    
    $this->kecepatan = $this->kecepatan - $q; //kecepatan berkurang
  }
  
  public function ubahGigi($r=0){
    
    $this->gigi = $r; //set gigi
  }
  
  /*creating Getter, utk mendapatkan Valuenya*/ 
  public function getSpeed(){ 
    
    return $this->kecepatan;
  }
  public function getGigi(){ 
    
    return $this->gigi;
  }
}
  ?>