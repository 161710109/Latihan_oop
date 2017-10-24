<?php
class matematika{
	public $penjumlahan1,$penjumlahan2,$pengurangan1,$pengurangan2,$perkalian1,$perkalian2,$pembagian1,$pembagian2;
	public function set_penjumlahan($tambah1,$tambah2)
{
 $this->penjumlahan1=$tambah1;
 $this->penjumlahan2=$tambah2;
}
public function get_penjumlahan()
{
	return $this->penjumlahan1+$this->penjumlahan2;
}
public function set_pengurangan($kurang1,$kurang2)
{
 $this->pengurangan1=$kurang1;
 $this->pengurangan2=$kurang2;
}
public function get_pengurangan()
{
	return $this->pengurangan1+$this->pengurangan2;
}
public function set_perkalian($kali1,$kali2)
{
 $this->perkalian1=$kali1;
 $this->perkalian2=$kali2;
}
public function get_perkalian()
{
	return $this->perkalian1+$this->perkalian2;
}
public function set_pembagian($bagi1,$bagi2)
{
 $this->pembagian1=$bagi1;
 $this->pembagian2=$bagi2;
}
public function get_pembagian()
{
	return $this->pembagian1+$this->pembagian2;
}
}
?> 